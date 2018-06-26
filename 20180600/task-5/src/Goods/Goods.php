<?php

namespace Goods;
/**
 * city-call
 * Copyright © 2018 Volkhin Nikolay
 * 25.06.18 21:54
 */

class Goods
{
    private $item = null;
    private $dataPath = '';

    function __construct(Item $item, string $dataPath)
    {
        $this->item = $item;
        $this->dataPath = $dataPath;
    }

    public function insert(): bool
    {
        $handler = new DataAccess($this->dataPath);
        $isSuccess = $handler->insert($this->item);

        return $isSuccess;
    }

    public function select(): bool
    {
        $handler = new DataAccess($this->dataPath);
        $isSuccess = $handler->select($this->item);

        if ($isSuccess) {
            $this->item = $handler->getData();
        }

        return $isSuccess;
    }

    public function update(): bool
    {
        $handler = new DataAccess($this->dataPath);
        $isSuccess = $handler->update($this->item);

        return $isSuccess;
    }

    public function delete(): bool
    {
        $handler = new DataAccess($this->dataPath);
        $isSuccess = $handler->delete($this->item);

        return $isSuccess;
    }

    public function getItem(): Item
    {
        $result = $this->item;

        return $result;
    }
}
