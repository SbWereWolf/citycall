<?php
/**
 * city-call
 * Copyright © 2018 Volkhin Nikolay
 * 27.06.18 3:17
 */

namespace Goods;


class PublicItem
{
    public $article = '';
    public $title = '';
    public $price = 0.0;
    public $description = '';
    public $weight = 0.0;

    public function __construct(Item $item)
    {
        $this->article = $item->getArticle();
        $this->title = $item->getTitle();
        $this->price = $item->getPrice();
        $this->description = $item->getDescription();
        $this->weight = $item->getWeight();
    }

}
