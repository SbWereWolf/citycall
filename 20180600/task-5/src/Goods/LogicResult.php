<?php
/**
 * city-call
 * Copyright © 2018 Volkhin Nikolay
 * 26.06.18 3:02
 */

namespace Goods;


class LogicResult
{
    private $operationSuccess = false;
    private $item = null;

    public function __construct(bool $operationSuccess, Item $item)
    {
        $this->item = $item;
        $this->operationSuccess = $operationSuccess;
    }

    /**
     * @return bool
     */
    public function isOperationSuccess(): bool
    {
        return $this->operationSuccess;
    }

    /**
     * @return Item|null
     */
    public function getItem(): ?Item
    {
        return $this->item;
    }


}
