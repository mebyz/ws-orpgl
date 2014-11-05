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
    protected $gameNodeTime;
    protected $memcache;

    public function __construct() {
        $this->memcache = new \Memcache();
        $this->memcache->connect('localhost', 11211);
        $this->clients = new \SplObjectStorage;
        $this->positions = array();
        $this->gameNodeTime = $this->getNodeTime();
    }

    protected function getNodeTime() {
        $h = date('i');
        $s = date('s');
        $this->gameNodeTime = round($h/60*24).":".$s;
        return $this->gameNodeTime;
    }

    protected function getMap() {
        return $this->memcache->get("map");
    }
    protected function setMap() {
        if ($handle = opendir('/tmp/')) {
                $pos=array();
                    while (false !== ($entry = readdir($handle))) {
                        if (stristr($entry, 'pos_')!==false)  {
                            $pos[substr($entry,4)]=trim(preg_replace('/\s\s+/', ' ', file_get_contents("/tmp/".$entry)));
                        }
                    }
                    $s = json_encode($pos);

                    $this->memcache->set("map",$s);
                    file_put_contents("/var/www/dev/source/web/map.json", $s);


                    closedir($handle);
                }

    }

    public function onOpen(ConnectionInterface $conn) {
        $url = ($conn->WebSocket->request->getUrl());

        if (substr($url,-4)==='/map') {
            echo "MAP !";
            $this->setMap();
            
        }
        else {

        $phpid=$conn->Session->get('name');
		$f='/tmp/pos_'.$phpid;
    	echo $phpid;
        $this->clients->attach($conn);
        $tp=false;
        if (file_exists($f))
        	$tp = file_get_contents($f);  
        if ($tp==false) {
        $this->positions[$phpid]=[0,0,0];
        file_put_contents($f, "0,0,0");
    	}
        else {
        	echo "stored position:".$tp."\n";
            $this->positions[$phpid]=explode(',',$tp);
            $conn->send("POS:".json_encode($this->positions[$phpid]));
        }
        }
        echo "New connection! ({$conn->resourceId})\n";

    }

    public function onMessage(ConnectionInterface $from, $msg) {
        $url = ($from->WebSocket->request->getUrl());

        if (substr($url,-4)==='/map') {
            echo "MAP !";
            $this->setMap();
            echo $this->getMap();
        }
        else {
    	$phpid=$from->Session->get('name');
        $numRecv = count($this->clients) - 1;
                $t=$this->getNodeTime();
                echo ' server>ST:'.$t." from:".$phpid.' message:'.$msg."\n";
                $premsga=explode(':', $msg);
                $premsg=$premsga[0];
                switch ($premsg) {
                    case "ST":
                            $from->send("ST:".$this->getNodeTime());
                        break;
                    case "POS":
                            $from->send("POS:".implode(",",$this->positions[$phpid]));
                        break;
                    case "CHAT":
                        //BROADCAST to other connected players !
                        foreach ($this->clients as $client) {
                            if ($from !== $client) {
                                echo "BROADCAST\n";
                                $client->send('UCHAT:'.$phpid.':'.$premsga[1]);
                            }
                        }
                        break;
                    case "NPOS":
                        $this->positions[$phpid]=explode(',', $premsga[1]);
                        file_put_contents('/tmp/pos_'.$phpid, $premsga[1]);
                        //BROADCAST new pos to other connected players !
                        foreach ($this->clients as $client) {
                            if ($from !== $client) {
                                echo "BROADCAST\n";
                                $client->send('UPOS:'.$phpid.':'.$premsga[1]);
                            }
                        }
                        break;
                    default:
                        # code...
                        break;
               }
        }

    }

    public function onClose(ConnectionInterface $conn) {
        $url = ($conn->WebSocket->request->getUrl());

        if (substr($url,-4)==='/map')
            echo "MAP !";
        else {
        	$phpid=$conn->Session->get('name');
            $this->clients->detach($conn);
    		echo $phpid.':'.implode(',',$this->positions[$phpid])."\n";
            echo "Connection {$conn->resourceId} has disconnected\n";
        }
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "An error has occurred: {$e->getMessage()}\n";

        $conn->close();
    }
}