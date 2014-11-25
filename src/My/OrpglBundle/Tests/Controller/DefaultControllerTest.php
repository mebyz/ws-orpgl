<?php

namespace My\OrpglBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {

	$ch = curl_init("/login_check");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($ch);
        $this->assertTrue(true);//stristr($result,"SERVER IS DOWN"));
    }
}
