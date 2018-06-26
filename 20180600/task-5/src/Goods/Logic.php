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
    private $dataPath = '';

    public function __construct(Item $item, string $dataPath)
    {
        $this->item = $item;
        $this->dataPath = $dataPath;
    }

    /**
     * @return LogicResult
     */
    public function delete(): LogicResult
    {
        $item = $this->item;
        $dataPath = $this->dataPath;
        $goods = new Goods($item, $dataPath);

        $isSuccess = $goods->delete();
        $completeItem = $goods->getItem();

        $result = new LogicResult($isSuccess, $completeItem);
        return $result;
    }

    public function read(): LogicResult
    {
        $item = $this->item;
        $dataPath = $this->dataPath;
        $goods = new Goods($item, $dataPath);

        $isSuccess = $goods->select();
        $completeItem = $goods->getItem();

        $result = new LogicResult($isSuccess, $completeItem);

        return $result;
    }

    public function create(): LogicResult
    {
        $item = $this->item;
        $dataPath = $this->dataPath;
        $goods = new Goods($item, $dataPath);

        $isSuccess = $goods->insert();
        $completeItem = $goods->getItem();

        $result = new LogicResult($isSuccess, $completeItem);
        return $result;
    }

    public function update(): LogicResult
    {
        $item = $this->item;
        $dataPath = $this->dataPath;
        $goods = new Goods($item, $dataPath);

        $isSuccess = $goods->update();
        $completeItem = $goods->getItem();

        $result = new LogicResult($isSuccess, $completeItem);
        return $result;
    }

}
