<?php

use Goods\StupidController;

/**
 * storage-for-all-things
 * Copyright © 2018 Volkhin Nikolay
 * 01.07.18 23:02
 */
class FunctionalTestWithoutSlim extends \PHPUnit\Framework\TestCase
{
    public function testPost()
    {
        $body = json_encode([
            'article' => '33',
            'title' => '111',
            'price' => 20,
            'description' => '22',
            'weight' => 10,
        ]);
        $parameters[0] = 'goods';

        require('data-path.php');

        $controller = new StupidController('POST', $parameters, $body, DATA_PATH);
        $isSuccess = $controller->process();

        //Assert
        $this->assertEquals(true, $isSuccess);
    }

    public function testPostResult()
    {
        $parameters[0] = 'goods';
        $parameters[1] = '33';
        $body = '';

        require('data-path.php');

        $controller = new StupidController('GET', $parameters, $body, DATA_PATH);
        $isSuccess = $controller->process();

        //Assert
        $item = $controller->getItem();
        $presentation = json_encode($item);

        $responseBody = json_encode([
            'article' => '33',
            'title' => '111',
            'price' => 20,
            'description' => '22',
            'weight' => 10,
        ]);

        $this->assertEquals(true, $isSuccess);
        $this->assertEquals($responseBody, $presentation);
    }

    public function testPut()
    {
        $body = json_encode([
            'article' => '33',
            'title' => 'Самый лучший день',
            'price' => 9999,
            'description' => 'Самый лучший товар',
            'weight' => 0.1,
        ]);
        $parameters[0] = 'goods';

        require('data-path.php');

        $controller = new StupidController('PUT', $parameters, $body, DATA_PATH);
        $isSuccess = $controller->process();

        //Assert
        $this->assertEquals(true, $isSuccess);
    }

    public function testPutResult()
    {
        $parameters[0] = 'goods';
        $parameters[1] = '33';
        $body = '';

        require('data-path.php');

        $controller = new StupidController('GET', $parameters, $body, DATA_PATH);
        $isSuccess = $controller->process();

        //Assert
        $item = $controller->getItem();
        $presentation = json_encode($item);

        $standardBody = json_encode([
            'article' => '33',
            'title' => 'Самый лучший день',
            'price' => 9999,
            'description' => 'Самый лучший товар',
            'weight' => 0.1,
        ]);

        $this->assertEquals(true, $isSuccess);
        $this->assertEquals($standardBody, $presentation);
    }

    public function testDelete()
    {
        $parameters[0] = 'goods';
        $parameters[1] = '33';
        $body = '';

        require('data-path.php');

        $controller = new StupidController('DELETE', $parameters, $body, DATA_PATH);
        $isSuccess = $controller->process();

        $this->assertEquals(true, $isSuccess);
    }

    public function testDeleteResult()
    {
        $parameters[0] = 'goods';
        $parameters[1] = '33';
        $body = '';

        require('data-path.php');

        $controller = new StupidController('GET', $parameters, $body, DATA_PATH);
        $isSuccess = $controller->process();

        //Assert
        $item = $controller->getItem();
        $presentation = json_encode($item);

        $standardBody = json_encode([
            'article' => '',
            'title' => '',
            'price' => 0.0,
            'description' => '',
            'weight' => 0.0,
        ]);

        $this->assertEquals(true, $isSuccess);
        $this->assertEquals($standardBody, $presentation);
    }
}
