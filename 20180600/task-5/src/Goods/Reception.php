<?php

namespace Goods;

use Slim\Http\Request;

/**
 * city-call
 * Copyright © 2018 Volkhin Nikolay
 * 25.06.18 21:53
 */
class Reception
{
    const ID = 'id';
    const TITLE = 'title';
    const PRICE = 'price';
    const DESCRIPTION = 'description';
    const WEIGHT = 'weight';
    const ARTICLE = 'article';

    private $request;
    private $arguments;

    function __construct(Request $request, array $arguments)
    {
        $this->request = $request;
        $this->arguments = $arguments;
    }

    public function toCreate(): Item
    {
        $item = $this->setupEmptyParameter();

        return $item;
    }

    private function setupEmptyParameter(): Item
    {
        $item = new Item();

        return $item;
    }

    public function toRead(): Item
    {
        $item = $this->setupFromPath();

        return $item;
    }

    private function setupFromPath(): Item
    {
        $arguments = $this->arguments;
        $parser = new InputParser($arguments);

        $id = self::getId($parser);
        $item = (new Item())->setId($id);

        return $item;
    }

    private static function getId(InputParser $parser): int
    {
        $id = $parser->getIntegerField(self::ID);
        return $id;
    }

    public function toDelete(): Item
    {
        $item = $this->setupFromPath();

        return $item;
    }

    public function toUpdate(): Item
    {
        $item = $this->setupFromBody();

        return $item;
    }

    private function setupFromBody(): Item
    {
        $body = $this->request->getParsedBody();
        $parser = new InputParser($body);

        $id = self::getId($parser);
        $title = self::getTitle($parser);
        $price = self::getPrice($parser);
        $description = self::getDescription($parser);
        $weight = self::getWeight($parser);
        $article = self::getArticle($parser);

        $item = (new Item())
            ->setId($id)
            ->setTitle($title)
            ->setPrice($price)
            ->setDescription($description)
            ->setWeight($weight)
            ->setArticle($article);

        return $item;
    }

    private static function getTitle(InputParser $parser): string
    {
        $value = $parser->getStringField(self::TITLE);
        return $value;
    }

    private static function getPrice(InputParser $parser): float
    {
        $value = $parser->getFloatField(self::PRICE);
        return $value;
    }

    private static function getDescription(InputParser $parser): string
    {
        $value = $parser->getStringField(self::DESCRIPTION);
        return $value;
    }

    private static function getWeight(InputParser $parser): float
    {
        $value = $parser->getFloatField(self::WEIGHT);
        return $value;
    }

    private static function getArticle(InputParser $parser): string
    {
        $value = $parser->getStringField(self::ARTICLE);
        return $value;
    }
}
