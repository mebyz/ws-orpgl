<?php
namespace My\OrpglBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\MemcacheSessionHandler;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$memcache = new \Memcache();
$memcache->connect('localhost', 11211);

$storage = new NativeSessionStorage(array(), new MemcacheSessionHandler($memcache));
$session = new Session($storage);
$session->start();
    	if($session->get('name')=='')
    		return $this->redirect($this->generateUrl('login_check'));

    	$response=$this->render('MyOrpglBundle:Default:index.html.twig');
        return $response;
    }
}
