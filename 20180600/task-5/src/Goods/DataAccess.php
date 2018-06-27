<?php

namespace Goods;
/**
 * city-call
 * Copyright © 2018 Volkhin Nikolay
 * 25.06.18 21:51
 */

class DataAccess
{
    const ARTICLE = ':ARTICLE';
    const TITLE = ':TITLE';
    const PRICE = ':PRICE';
    const DESCRIPTION = ':DESCRIPTION';
    const WEIGHT = ':WEIGHT';

    private $dsn = '';
    private $data = null;

    function __construct(string $dataPath)
    {
        $this->dsn = 'sqlite:' . $dataPath;
    }

    /**
     * @return string
     */
    private static function getValuesPhrase(): string
    {
        return self::ARTICLE
            . ',' . self::TITLE
            . ', CAST(' . self::PRICE . ' as FLOAT),'
            . self::DESCRIPTION
            . ', CAST(' . self::WEIGHT . ' as FLOAT)';
    }

    /**
     * @return string
     */
    private static function getSetPhrase(): string
    {
        $result = '
title = ' . self::TITLE . ',
price = CAST(' . self::PRICE . ' as FLOAT),
description =' . self::DESCRIPTION . ', 
weight =  CAST(' . self::WEIGHT . ' as FLOAT)';

        return $result;
    }

    public function insert(Item $item): bool
    {
        $valuesPhrase = self::getValuesPhrase();
        $requestText = "
INSERT INTO goods 
(article, title, price, description, weight) 
VALUES ($valuesPhrase);
        ";

        $dbConnection = $this->getDbConnection();
        $request = $dbConnection->prepare($requestText);

        $request->bindValue(self::ARTICLE, $item->getArticle());
        $request->bindValue(self::TITLE, $item->getTitle());
        $request->bindValue(self::PRICE, $item->getPrice());
        $request->bindValue(self::DESCRIPTION, $item->getDescription());
        $request->bindValue(self::WEIGHT, $item->getWeight());

        $isSuccess = $request->execute();

        return $isSuccess;
    }

    public function select(Item $item): bool
    {
        $articleParameter = self::ARTICLE;
        $requestText = "
SELECT
    article, title, price, description, weight
FROM
  goods 
WHERE
  article = $articleParameter 
;
        ";

        $dbConnection = $this->getDbConnection();
        $request = $dbConnection->prepare($requestText);

        $request->bindValue(self::ARTICLE, $item->getArticle());
        $isSuccess = $request->execute();

        $dataSet = false;
        if ($isSuccess) {
            $dataSet = $request->fetch(\PDO::FETCH_ASSOC);
        }

        $isContain = !empty($dataSet) && count($dataSet) > 0;
        if ($isSuccess && $isContain) {

            $this->parseOutput($dataSet);
        }
        if ($isSuccess && !$isContain) {

            $this->data = new Item();
        }

        return $isSuccess;
    }

    public function update(Item $item): bool
    {
        $setPhrase = self::getSetPhrase();
        $articleParameter = self::ARTICLE;

        $requestText = "
UPDATE goods
SET
$setPhrase
WHERE
  article = $articleParameter";

        $dbConnection = $this->getDbConnection();
        $request = $dbConnection->prepare($requestText);

        $request->bindValue(self::ARTICLE, $item->getArticle());
        $request->bindValue(self::TITLE, $item->getTitle());
        $request->bindValue(self::PRICE, $item->getPrice());
        $request->bindValue(self::DESCRIPTION, $item->getDescription());
        $request->bindValue(self::WEIGHT, $item->getWeight());

        $isSuccess = $request->execute();

        return $isSuccess;
    }

    public function delete(Item $item): bool
    {
        $articleParameter = self::ARTICLE;
        $requestText = "
DELETE FROM goods
WHERE
  article = $articleParameter 
;
        ";

        $dbConnection = $this->getDbConnection();
        $request = $dbConnection->prepare($requestText);

        $request->bindValue(self::ARTICLE, $item->getArticle());
        $isSuccess = $request->execute();

        return $isSuccess;
    }

    /**
     * @return Item
     */
    public function getData(): Item
    {
        return $this->data;
    }

    /**
     * @return \PDO
     */
    private function getDbConnection(): \PDO
    {
        $dbConnection = new \PDO($this->dsn);
        return $dbConnection;
    }

    /**
     * @param $dataSet
     * @return bool
     */
    private function parseOutput(array $dataSet): bool
    {
        $parser = new ArrayParser($dataSet);

        $title = $parser->getStringField('title');
        $price = $parser->getFloatField('price');
        $description = $parser->getStringField('description');
        $weight = $parser->getFloatField('weight');
        $article = $parser->getStringField('article');

        $item = (new Item())
            ->setTitle($title)
            ->setPrice($price)
            ->setDescription($description)
            ->setWeight($weight)
            ->setArticle($article);

        $this->data = $item;

        return true;
    }
}
