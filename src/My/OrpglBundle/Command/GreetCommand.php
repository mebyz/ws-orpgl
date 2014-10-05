<?php 

namespace My\OrpglBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use Ratchet\Session\SessionProvider;
use Symfony\Component\HttpFoundation\Session\Storage\Handler;

class Chat implements MessageComponentInterface {
    protected $clients;
    protected $positions;

    public function __construct() {
        $this->clients = new \SplObjectStorage;
        $this->positions = array();
    }

    public function onOpen(ConnectionInterface $conn) {
    	//var_dump($conn->WebSocket->request->getUrl(true)->getParts());
    	//$conn->Session->set('id',rand(1,100));
        var_dump($conn->Session->get('name'));
//        var_dump($conn->Session);
        // die();
    	$phpid=$conn->Session->get('name');
		$f='/tmp/pos_'.$phpid;
    	echo $phpid;
        // Store the new connection to send messages to later
        $this->clients->attach($conn);
        $tp=false;
        if (file_exists($f))
        	$tp = file_get_contents($f);  
        if ($tp==false) {
        file_put_contents($f,'0,0,0');
        $this->positions[$phpid]=[0,0,0];
    	}
        else {
        	echo "position:".$tp."\n";
           $conn->send("POS:".$tp);
        }
        echo "New connection! ({$conn->resourceId})\n";

    }

    public function onMessage(ConnectionInterface $from, $msg) {
    	$phpid=$from->Session->get('name');
        $numRecv = count($this->clients) - 1;
        echo $phpid.':'.$msg."\n";
			$this->positions[$phpid]=explode(',', $msg);
			file_put_contents('/tmp/pos_'.$phpid, $msg);
        foreach ($this->clients as $client) {
            if ($from !== $client) {
                // The sender is not the receiver, send to each client connected
                $client->send($phpid.':'.$msg);
            }
        }
    }

    public function onClose(ConnectionInterface $conn) {
    	$phpid=$conn->Session->get('name');
        // The connection is closed, remove it, as we can no longer send it messages
        $this->clients->detach($conn);
		echo $phpid.':'.implode(',',$this->positions[$phpid])."\n";
        echo "Connection {$conn->resourceId} has disconnected\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "An error has occurred: {$e->getMessage()}\n";

        $conn->close();
    }
}


class GreetCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('demo:greet')
            ->setDescription('desc');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
       
$memcache = new \Memcache();
    $memcache->connect('localhost', 11211);

//$cacheDriver = new \Doctrine\Common\Cache\ApcCache();

$session = new SessionProvider(
    new Chat()
  , new Handler\MemcacheSessionHandler($memcache)
);


    $server = IoServer::factory(
        new HttpServer(
            new WsServer(
              $session  
            )
        ),
        8080
    );

    $server->run();
     
    $server->route('/sessDemo', $session);
    }
}