<?php

namespace TobatBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdminControllerTest extends WebTestCase
{
    public function testClients()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/clients');
    }

    public function testBateaux()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/bateaux');
    }

}
