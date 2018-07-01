<?php
/**
 * city-call
 * Copyright © 2018 Volkhin Nikolay
 * 01.07.18 21:07
 */

namespace Goods;


class ItemFactory
{
    private $parameters = [];
    private $body = null;

    public function __construct(array $parameters, string $body)
    {
        $this->parameters = $parameters;
        if ($body != '') {
            $this->body = $body;
        }
    }

    public function getItem(): Item
    {
        $parameters = $this->parameters;
        $isContain = count($parameters) > 1;

        $article = '';
        $isSuccess = false;
        if ($isContain) {
            $article = $parameters[1];
            $isSuccess = true;
        }

        $body = $this->body;
        $parametersArray = array();
        $isContain = !empty($body);
        if ($isContain) {
            $parametersArray = json_decode($body, true);
            $isSuccess = !empty($parametersArray);
        }

        $title = '';
        $price = 0;
        $description = '';
        $weight = 0;
        if ($isContain && $isSuccess) {
            $article = $parametersArray['article'];
            $title = $parametersArray['title'];
            $price = $parametersArray['price'];
            $description = $parametersArray['description'];
            $weight = $parametersArray['weight'];
        }

        $item = (new Item())
            ->setArticle($article)
            ->setDescription($description)
            ->setPrice($price)
            ->setTitle($title)
            ->setWeight($weight);

        return $item;

    }
}
