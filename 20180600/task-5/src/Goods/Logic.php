<?php
/**
 * city-call
 * Copyright © 2018 Volkhin Nikolay
 * 26.06.18 2:59
 */

namespace Goods;


class Logic
{
    private $item = null;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    /**
     * @return LogicResult
     */
    public function delete(): LogicResult
    {
        $item = $this->item;
        $goods = new Goods($item);

        $isSuccess = $goods->delete();
        $completeItem = $goods->getItem();

        $result = new LogicResult($isSuccess, $completeItem);
        return $result;
    }

    public function read(): LogicResult
    {
        $item = $this->item;
        $goods = new Goods($item);

        $isSuccess = $goods->select();
        $completeItem = $goods->getItem();

        $result = new LogicResult($isSuccess, $completeItem);
        return $result;
    }

    public function create(): LogicResult
    {
        $item = $this->item;
        $goods = new Goods($item);

        $isSuccess = $goods->insert();
        $completeItem = $goods->getItem();

        $result = new LogicResult($isSuccess, $completeItem);
        return $result;
    }

    public function update(): LogicResult
    {
        $item = $this->item;
        $goods = new Goods($item);

        $isSuccess = $goods->update();
        $completeItem = $goods->getItem();

        $result = new LogicResult($isSuccess, $completeItem);
        return $result;
    }

}
