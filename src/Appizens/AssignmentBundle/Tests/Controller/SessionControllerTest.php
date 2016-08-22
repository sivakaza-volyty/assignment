<?php

namespace Appizens\AssignmentBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class SessionControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $controller = static::createClient();

        $controller->request('GET', '/index');
        $response = $controller->getResponse();
        $this->assertTrue($response->isSuccessful());
    }

    public function testGetSpecialistSessions(){
        $client = static::createClient();

        $client->request('GET', '/specialist_sessions/1');

        $response = $client->getResponse();
        $this->assertTrue($response->isSuccessful());

    }

    public function testSearchSpecialist(){
        $client = static::createClient();
        $client->request('POST', '/search_specialist',
                                    array('animal_sounds' => array(
                                            'specialist_id'  => 1,
                                            'time_slot_start' => new \DateTime(),
                                            'time_slot_end'=> new \DateTime()
                                              )
                                          )
                                    );
        $response = $client->getResponse();
        $this->assertTrue($response->isSuccessful());

    }

}
