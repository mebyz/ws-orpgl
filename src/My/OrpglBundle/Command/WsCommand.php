<?php 
namespace My\OrpglBundle\Command;

use My\OrpglBundle\WsProvider;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\HttpFoundation\Session\Storage\Handler;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use Ratchet\Session\SessionProvider;

class WsCommand extends Command
{
    protected function configure()
    {
        $this
        ->setName('ws:launch')
        ->setDescription('desc');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $memcache = new \Memcache();
        $memcache->connect('localhost', 11211);

        $session = new SessionProvider(
            new WsProvider()
            , new Handler\MemcacheSessionHandler($memcache)
            );


        $server = IoServer::factory(
            new HttpServer(
                new WsServer(
                  $session  
                  )
                ),
            8081
            );

        $server->run();

        $server->route('/launch', $session);
    }
}
