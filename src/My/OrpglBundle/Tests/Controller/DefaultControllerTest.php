<?php

namespace My\OrpglBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {

$ch = curl_init("http://10.0.2.2:8080/app_dev.php/login_check");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_FILE, $fp);
//curl_setopt($ch, CURLOPT_HEADER, 0);

$result = curl_exec($ch);
//var_dump(stristr($result,"SERVER"));
//curl_close($ch);
        $this->assertNotFalse(stristr($result,"SERVER IS DOWN"));
    }
}
