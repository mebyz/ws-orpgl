<?php

namespace My\OrpglBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {

	$ch = curl_init("http://127.0.0.1/app_dev.php/login_check");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($ch);
	$tr= (stristr($result,"SERVER IS DOWN")!==false)?true:false;
        $this->assertTrue($tr);
    }
}
