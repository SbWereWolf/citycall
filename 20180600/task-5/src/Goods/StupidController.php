<?php
/**
 * city-call
 * Copyright © 2018 Volkhin Nikolay
 * 01.07.18 20:36
 */

namespace Goods;


class StupidController
{
    const GET = 'GET';
    const POST = 'POST';
    const PUT = 'PUT';
    const DELETE = 'DELETE';

    private $method = '';
    private $parameters = '';
    private $body = '';
    private $dataPath = '';

    private $item = null;

    /**
     * StupidController constructor.
     * @param string $method
     * @param array $parameters
     * @param string $body
     * @param string $dataPath
     */
    public function __construct(string $method, array $parameters, string $body, string $dataPath)
    {
        $this->method = $method;
        $this->parameters = $parameters;
        $this->body = $body;
        $this->dataPath = $dataPath;
    }

    public function process(): bool
    {
        $parameters = $this->parameters;
        $body = $this->body;

        $itemFactory = new ItemFactory($parameters, $body);
        $item = $itemFactory->getItem();

        $isSuccess = false;
        $method = $this->method;
        switch ($method) {
            case self::DELETE:
                $isSuccess = $this->delete($item);
                break;
            case self::GET:
                $isSuccess = $this->read($item);
                break;
            case self::POST:
                $isSuccess = $this->create($item);
                break;
            case self::PUT:
                $isSuccess = $this->update($item);
                break;
        }

        return $isSuccess;
    }

    private function delete(Item $item): bool
    {

        $logicResult = (new Logic($item, $this->dataPath))->delete();

        $isSuccess = $logicResult->isOperationSuccess();

        return $isSuccess;
    }

    private function read(Item $item): bool
    {

        $logicResult = (new Logic($item, $this->dataPath))->read();

        $isSuccess = $logicResult->isOperationSuccess();
        if ($isSuccess) {
            $this->item = $logicResult->getItem();
        }

        return $isSuccess;
    }

    private function create(Item $item): bool
    {

        $logicResult = (new Logic($item, $this->dataPath))->create();

        $isSuccess = $logicResult->isOperationSuccess();

        return $isSuccess;
    }

    private function update(Item $item): bool
    {

        $logicResult = (new Logic($item, $this->dataPath))->update();

        $isSuccess = $logicResult->isOperationSuccess();

        return $isSuccess;
    }

    public function getItem(): PublicItem
    {
        $item = new PublicItem($this->item);
        return $item;
    }

}
