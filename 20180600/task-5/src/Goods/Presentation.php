<?php

namespace Goods;

use Slim\Http\Response;

/**
 * city-call
 * Copyright © 2018 Volkhin Nikolay
 * 25.06.18 21:52
 */
class Presentation
{
    const COMMON_OK = 200;
    const POST_OK = 201;
    const DELETE_OK = 204;
    const ERROR = 500;

    const GET = 'get';
    const POST = 'post';
    const PUT = 'put';
    const DELETE = 'delete';

    private $response = null;
    private $item = null;
    private $isSuccess = false;

    function __construct(Response $response, LogicResult $result)
    {
        $this->response = $response;
        $this->item = $result->getItem();
        $this->isSuccess = $result->isOperationSuccess();
    }

    public function fromCreate(): Response
    {
        $response = $this->setupByMethod(self::POST);

        return $response;
    }

    private function setupByMethod(string $method): Response
    {
        $response = $this->response;

        $statusCode = $this->getStatusCode($method);
        $response = $response->withStatus($statusCode);

        if ($method == self::GET && !empty($this->item->getArticle())) {
            $item = $this->item;

            $output = new PublicItem($item);

            $response = $response->withJson($output);
        }

        return $response;
    }

    private function getStatusCode(string $method): int
    {
        $statusCode = self::ERROR;

        $isSuccess = $this->isSuccess;
        if ($isSuccess) {
            switch ($method) {
                case self::POST :
                    $statusCode = self::POST_OK;
                    break;
                case self::GET:
                    $statusCode = self::COMMON_OK;
                    break;
                case self::PUT:
                    $statusCode = self::COMMON_OK;
                    break;
                case self::DELETE:
                    $statusCode = self::DELETE_OK;
                    break;
            }
        }
        return $statusCode;
    }

    public function fromRead(): Response
    {
        $response = $this->setupByMethod(self::GET);

        return $response;
    }

    public function fromDelete(): Response
    {
        $response = $this->setupByMethod(self::DELETE);

        return $response;
    }

    public function fromUpdate(): Response
    {
        $response = $this->setupByMethod(self::PUT);

        return $response;
    }
}
