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
    	$response=$this->render('MyOrpglBundle:Default:index.html.twig');

        return $response;
    }
}
