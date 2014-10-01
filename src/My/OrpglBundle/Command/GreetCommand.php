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


class Chat implements MessageComponentInterface {
    protected $clients;
    protected $positions;

    public function __construct() {
        $this->clients = new \SplObjectStorage;
        $this->positions = array();
    }

    public function onOpen(ConnectionInterface $conn) {

    	$phpid=$conn->WebSocket->request->getCookies()['PHPSESSID'];
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
        }
        echo "New connection! ({$conn->resourceId})\n";

    }

    public function onMessage(ConnectionInterface $from, $msg) {
    	$phpid=$from->WebSocket->request->getCookies()['PHPSESSID'];
        $numRecv = count($this->clients) - 1;
        echo sprintf('Connection %d sending message "%s" to %d other connection%s' . "\n"
            , $from->resourceId, $msg, $numRecv, $numRecv == 1 ? '' : 's');
			$this->positions[$phpid]=explode(',', $msg);
			file_put_contents('/tmp/pos_'.$phpid, $msg);
        foreach ($this->clients as $client) {
            if ($from !== $client) {
                // The sender is not the receiver, send to each client connected
                $client->send($msg);
            }
        }
    }

    public function onClose(ConnectionInterface $conn) {
    	$phpid=$conn->WebSocket->request->getCookies()['PHPSESSID'];
        // The connection is closed, remove it, as we can no longer send it messages
        $this->clients->detach($conn);
		echo "position:".json_encode($this->positions[$phpid])."\n";
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
       



    $server = IoServer::factory(
        new HttpServer(
            new WsServer(
                new Chat()
            )
        ),
        8080
    );

    $server->run();
        $server = IoServer::factory(
        	new Chat(),
    	    8080
	    );

	    $server->run();
    }
}