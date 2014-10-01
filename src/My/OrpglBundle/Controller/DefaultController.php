<?php

namespace My\OrpglBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyOrpglBundle:Default:index.html.twig'/*, array('name' => $name)*/);
    }
}
