<?php

namespace Acme\BlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PageControllerTest extends WebTestCase
{
    public function testGetpage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/getPage');
    }

}
