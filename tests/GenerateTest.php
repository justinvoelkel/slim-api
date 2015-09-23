<?php
/**
 * Created by PhpStorm.
 * User: justinvoelkel
 * Date: 9/22/15
 * Time: 11:23 AM
 */

require __DIR__.'./../vendor/autoload.php';

use GuzzleHttp\Client;
use Slim\Environment;

class GenerateTest extends PHPUnit_Framework_TestCase
{
    protected $client;

    protected function setUp()
    {
        $this->client = new Client([
            'base_uri'=>'http://testapi.dev'
        ]);
    }

    public function testGenerateNewShortcode()
    {
        $data = json_encode(['url'=>'http://facebook.com']);
        $request = $this->client->request('/api/generate', []);
        $request->setBody($data);
        $response = $request->send();

        $this->assertEquals(201, $response->getStatusCode());

    }
}