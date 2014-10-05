<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Encoder\EncoderFactory;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\MemcacheSessionHandler;

class WelcomeController extends Controller
{
    public function indexAction($name="guest")
    {
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */
        //$username = 'manu';
        $password = 'pouet';

$em = $this->getDoctrine();
$repo  = $em->getRepository("MyOrpglBundle:User"); //Entity Repository
$user = $repo->loadUserByUsername($name);
if (!$user) {
    throw new UsernameNotFoundException("User not found");
} else {
/*	var_dump($user);
	die();*/

$defaultEncoder = new MessageDigestPasswordEncoder('sha512', true, 5000);
$encoders = array(
    'My\OrpglBundle\Entity\User' => $defaultEncoder,

    // ...
);

$encoderFactory = new EncoderFactory($encoders);
$encoder = $encoderFactory->getEncoder($user);

// retournera $weakEncoder (voir plus haut)

$encodedPassword = $encoder->encodePassword($password, $user->getSalt());

// vérifie si le mot de passe est valide :

$validPassword = $encoder->isPasswordValid(
    $user->getPassword(),
    $password,
    $user->getSalt());

if (!$validPassword) die('nooo');
    $token = new UsernamePasswordToken($user, $password, "admin_area", array('ROLE_USER'));
    $this->get("security.context")->setToken($token); //now the user is logged in
     
    //now dispatch the login event
    $request = $this->get("request");
    $event = new InteractiveLoginEvent($request, $token);
    $this->get("event_dispatcher")->dispatch("security.interactive_login", $event);
}
$memcache = new \Memcache();
$memcache->connect('localhost', 11211);

$storage = new NativeSessionStorage(array(), new MemcacheSessionHandler($memcache));
$session = new Session($storage);
$session->start();

$session->set('name',$name);
return $this->redirect($this->generateUrl('my_orpgl_homepage'));
//return;
//        return $this->render('AcmeDemoBundle:Welcome:index.html.twig', array('name'=>$name));
    }
}