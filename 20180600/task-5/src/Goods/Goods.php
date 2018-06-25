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

    function __construct(Item $item)
    {
        $this->item = $item;
    }

    public function insert(): bool
    {

        return true;
    }

    public function select(): bool
    {

        return true;

    }

    public function update(): bool
    {

        return true;

    }

    public function delete(): bool
    {

        return true;

    }

    public function getItem(): Item
    {
        $result = $this->item;

        return $result;
    }

}
