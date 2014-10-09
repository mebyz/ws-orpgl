<?php
namespace My\OrpglBundle;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use Ratchet\Session\SessionProvider;

class WsProvider implements MessageComponentInterface {
    protected $clients;
    protected $positions;

    public function __construct() {
        $this->clients = new \SplObjectStorage;
        $this->positions = array();
    }

    public function onOpen(ConnectionInterface $conn) {
        $phpid=$conn->Session->get('name');
		$f='/tmp/pos_'.$phpid;
    	echo $phpid;
        $this->clients->attach($conn);
        $tp=false;
        if (file_exists($f))
        	$tp = file_get_contents($f);  
        if ($tp==false) {
        $this->positions[$phpid]=[0,0,0];
    	}
        else {
        	echo "stored position:".$tp."\n";
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
                $client->send($phpid.':'.$msg);
            }
        }
    }

    public function onClose(ConnectionInterface $conn) {
    	$phpid=$conn->Session->get('name');
        $this->clients->detach($conn);
		echo $phpid.':'.implode(',',$this->positions[$phpid])."\n";
        echo "Connection {$conn->resourceId} has disconnected\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "An error has occurred: {$e->getMessage()}\n";

        $conn->close();
    }
}