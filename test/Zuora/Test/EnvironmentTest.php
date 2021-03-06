<?php

namespace Zuora\Test;

use Zuora\Environment;

class EnvironmentTest extends \PHPUnit_Framework_TestCase
{
    public function testFactory()
    {
        $options = array(
            'username' => 'email@example.com',
            'password' => 'secretpassword',
            'endpoint' => 'https://endpoint.com/rest',
            'version' => '2',
        );

        $env = Environment::factory($options);

        $this->assertEquals($options['username'], $env->getUsername());
        $this->assertEquals($options['password'], $env->getPassword());
        $this->assertEquals($options['endpoint'], $env->getEndpoint());
        $this->assertEquals($options['version'], $env->getVersion());
        $this->assertEquals('https://endpoint.com/rest/v2/test', $env->getUrl('test'));
    }
} 