<?php

namespace My\OrpglBundle\Controller;

use Symfony\Component\Security\Core\SecurityContext;

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
        
      $request = $this->getRequest();

      $username = '';
      $password = '';
      if ($request->getMethod() == 'POST') {
        $username = $_POST['_username'];
        $password = $_POST['_password'];
    }
    
    $curl = curl_init();
    if ($_SERVER['SERVER_ADDR']=='::1')  
        $_SERVER['SERVER_ADDR']="localhost";

    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'http://'.$_SERVER['SERVER_ADDR'].':8081/launch',
        CURLOPT_USERAGENT => 'Codular Sample cURL Request'
        ));
    $resp = curl_exec($curl);
    curl_close($curl);

if($resp===false) ///SERVER DOWNNNN
return $this->render('MyOrpglBundle:Default:login.html.twig', array('last_username' =>$username,'error'=>array('message'=>'SERVER IS DOWN. please come back later ;)'))); 

if ($username == '')
   return $this->render('MyOrpglBundle:Default:login.html.twig', array('last_username' =>$username,'error'=>array('message'=>'please login'))); 



$em = $this->getDoctrine();
$repo  = $em->getRepository("MyOrpglBundle:User"); //Entity Repository
$user = $repo->loadUserByUsername($username);
if (!$user) {
   return $this->render('MyOrpglBundle:Default:login.html.twig', array('last_username' =>$username,'error'=>array('message'=>'wrong username or password')));
} 
else {

    $defaultEncoder = new MessageDigestPasswordEncoder('sha512', true, 5000);
    $encoders = array(
        'My\OrpglBundle\Entity\User' => $defaultEncoder
        );

    $encoderFactory = new EncoderFactory($encoders);
    $encoder = $encoderFactory->getEncoder($user);

    $encodedPassword = $encoder->encodePassword($password, $user->getSalt());

    $validPassword = $encoder->isPasswordValid(
        $user->getPassword(),
        $password,
        $user->getSalt());

    if (!$validPassword)    return $this->render('MyOrpglBundle:Default:login.html.twig', array('last_username' =>$username,'error'=>array('message'=>'wrong username or password')));
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

$session->set('name',$username);
return $this->redirect($this->generateUrl('my_orpgl_homepage'));
}
}
