<?php

namespace Goods;

use Slim\Http\Request;
use Slim\Http\Response;

/**
 * city-call
 * Copyright © 2018 Volkhin Nikolay
 * 25.06.18 21:53
 */
class Controller
{
    const GET = 'get';
    const POST = 'post';
    const PUT = 'put';
    const DELETE = 'delete';

    private $request = null;
    private $response = null;
    private $arguments = array();
    private $method = '';

    function __construct(Request $request, Response $response, array $arguments, string $method)
    {
        $this->arguments = $arguments;
        $this->request = $request;
        $this->response = $response;
        $this->method = $method;
    }

    public function process(): Response
    {
        $request = $this->request;
        $arguments = $this->arguments;
        $reception = new  Reception( $request, $arguments);

        $method = $this->method;
        $response = $this->response;
        switch ($method) {
            case self::DELETE:
                $response = $this->delete($reception);
                break;
            case self::GET:
                $response = $this->read($reception);
                break;
            case self::POST:
                $response = $this->create($reception);
                break;
            case self::PUT:
                $response = $this->update($reception);
                break;
        }

        return $response;
    }

    private function delete(Reception $reception): Response
    {
        $item = $reception->toDelete();

        $logicResult = (new Logic($item))->delete();

        $response = (new Presentation($this->response,$logicResult))->fromDelete();

        return $response;
    }

    private function read(Reception $reception): Response
    {
        $item = $reception->toRead();

        $logicResult = (new Logic($item))->read();

        $response = (new Presentation($this->response,$logicResult))->fromRead();

        return $response;
    }

    private function create(Reception $reception): Response
    {
        $item = $reception->toCreate();

        $logicResult = (new Logic($item))->create();

        $response = (new Presentation($this->response,$logicResult))->fromCreate();

        return $response;
    }

    private function update(Reception $reception): Response
    {
        $item = $reception->toUpdate();

        $logicResult = (new Logic($item))->update();

        $response = (new Presentation($this->response,$logicResult))->fromUpdate();

        return $response;
    }
}
