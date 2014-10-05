<?php 

namespace My\OrpglBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\ORM\EntityManager;


   
class AdduserCommand extends ContainerAwareCommand
{
    protected $em;

    protected function configure()
    {
        $this
            ->setName('demo:adduser')
            ->setDescription('desc');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {


        $this->em = $this->getContainer()->get('doctrine.orm.entity_manager');
        $factory = $this->getContainer()->get('security.encoder_factory');

    $user = new \My\OrpglBundle\Entity\User();
    $username='manu2';
    $email='emmanuel2.botros@gmail.com';
    $password='pouet2';
    $encoder = $factory->getEncoder($user);
    $user->setSalt(md5(time()));
    $pass = $encoder->encodePassword($password, $user->getSalt());
    $user->setUsername($username);
    $user->setEmail($email);
    $user->setPassword($pass);

    $this->em->persist($user);
    $this->em->flush();

        echo 'ok';
    }
}