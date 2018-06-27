<?php
/**
 * city-call
 * Copyright © 2018 Volkhin Nikolay
 * 27.06.18 23:00
 */

use Slim\Http\Request;
use Slim\Http\Response;

class WholeFunctionalTest extends \PHPUnit\Framework\TestCase
{
    public function testPost()
    {
        //write request data
        $body = (new \Slim\Http\RequestBody());
        $body->write(json_encode([
            'article' => '33',
            'title' => '111',
            'price' => 20,
            'description' => '22',
            'weight' => 10,
        ]));
        $link = 'http://localhost/goods';
        $request = $this->setupRequest($body, $link);

        //set method & content type
        $request = $request->withHeader('Content-Type', 'application/json');
        $request = $request->withMethod('POST');

        // load web application
        /** @var \Slim\App $app */
        $app = require('../app.php');
        //execute request
        $resOut = $app->process($request, new Response());
        $resOut->getBody()->rewind();

        //Assert
        $this->assertEquals(null, $resOut->getBody()->getContents());
        $this->assertEquals(201, $resOut->getStatusCode());
    }

    /**
     * @param string $body
     * @param string $link
     * @return Request
     */
    private function setupRequest(\Psr\Http\Message\StreamInterface $body, string $link): Request
    {
        $env = \Slim\Http\Environment::mock();
        $uri = \Slim\Http\Uri::createFromString($link);
        $headers = \Slim\Http\Headers::createFromEnvironment($env);
        $cookies = [];
        $serverParams = $env->all();
        $uploadedFiles = \Slim\Http\UploadedFile::createFromEnvironment($env);
        $request = new Request('GET', $uri, $headers, $cookies, $serverParams, $body, $uploadedFiles);
        return $request;
    }

    public function testPostResult()
    {
        //write request data
        $body = (new \Slim\Http\RequestBody());
        $link = 'http://localhost/goods/33';
        $request = $this->setupRequest($body, $link);

        //set method & content type
        $request = $request->withHeader('Content-Type', 'application/json');
        $request = $request->withMethod('GET');

        // load web application
        /** @var \Slim\App $app */
        $app = require('../app.php');
        //execute request
        $resOut = $app->process($request, new Response());
        $resOut->getBody()->rewind();

        //Assert
        $this->assertEquals(json_encode([
            'article' => '33',
            'title' => '111',
            'price' => 20,
            'description' => '22',
            'weight' => 10,
        ]), $resOut->getBody()->getContents());
        $this->assertEquals(200, $resOut->getStatusCode());
    }

    public function testPut()
    {
        //write request data
        $body = (new \Slim\Http\RequestBody());
        $body->write(json_encode([
            'article' => '33',
            'title' => 'Самый лучший день',
            'price' => 9999,
            'description' => 'Самый лучший товар',
            'weight' => 0.1,
        ]));
        $link = 'http://localhost/goods';
        $request = $this->setupRequest($body, $link);

        //set method & content type
        $request = $request->withHeader('Content-Type', 'application/json');
        $request = $request->withMethod('PUT');

        // load web application
        /** @var \Slim\App $app */
        $app = require('../app.php');
        //execute request
        $resOut = $app->process($request, new Response());
        $resOut->getBody()->rewind();

        //Assert
        $this->assertEquals(null, $resOut->getBody()->getContents());
        $this->assertEquals(200, $resOut->getStatusCode());
    }

    public function testPutResult()
    {
        //write request data
        $body = (new \Slim\Http\RequestBody());
        $link = 'http://localhost/goods/33';
        $request = $this->setupRequest($body, $link);

        //set method & content type
        $request = $request->withHeader('Content-Type', 'application/json');
        $request = $request->withMethod('GET');

        // load web application
        /** @var \Slim\App $app */
        $app = require('../app.php');
        //execute request
        $resOut = $app->process($request, new Response());
        $resOut->getBody()->rewind();

        //Assert
        $this->assertEquals(json_encode([
            'article' => '33',
            'title' => 'Самый лучший день',
            'price' => 9999,
            'description' => 'Самый лучший товар',
            'weight' => 0.1,
        ]), $resOut->getBody()->getContents());
        $this->assertEquals(200, $resOut->getStatusCode());
    }

    public function testDelete()
    {
        //write request data
        $body = (new \Slim\Http\RequestBody());
        $link = 'http://localhost/goods/33';
        $request = $this->setupRequest($body, $link);

        //set method & content type
        $request = $request->withHeader('Content-Type', 'application/json');
        $request = $request->withMethod('DELETE');

        // load web application
        /** @var \Slim\App $app */
        $app = require('../app.php');
        //execute request
        $resOut = $app->process($request, new Response());
        $resOut->getBody()->rewind();

        //Assert
        $this->assertEquals(null, $resOut->getBody()->getContents());
        $this->assertEquals(204, $resOut->getStatusCode());
    }

    public function testDeleteResult()
    {
        //write request data
        $body = (new \Slim\Http\RequestBody());
        $link = 'http://localhost/goods/33';
        $request = $this->setupRequest($body, $link);

        //set method & content type
        $request = $request->withHeader('Content-Type', 'application/json');
        $request = $request->withMethod('GET');

        // load web application
        /** @var \Slim\App $app */
        $app = require('../app.php');
        //execute request
        $resOut = $app->process($request, new Response());
        $resOut->getBody()->rewind();

        //Assert
        $this->assertEquals(null, $resOut->getBody()->getContents());
        $this->assertEquals(200, $resOut->getStatusCode());
    }
}
