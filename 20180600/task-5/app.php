<?php
/**
 * city-call
 * Copyright © 2018 Volkhin Nikolay
 * 28.06.18 0:45
 */

if (!defined('APPLICATION_ROOT')) {
    define('APPLICATION_ROOT', realpath(__DIR__));
}

require APPLICATION_ROOT . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

if (!defined('DATA_PATH')) {
    define('DATA_PATH', APPLICATION_ROOT . DIRECTORY_SEPARATOR . 'sqlite-db' . DIRECTORY_SEPARATOR . 'goods.sqlite');
}

use Goods\Controller;
use Slim\Container;
use Slim\Http\Request;
use Slim\Http\Response;

// Create and configure Slim app
$configuration['displayErrorDetails'] = true;
$configuration['addContentLengthHeader'] = false;
$container = new Container(['settings' => $configuration]);


$app = new \Slim\App($container);

/**
 * @SWG\Swagger(
 *   schemes={"http"},
 *   host="localhost",
 *   basePath="/",
 *   produces={"application/json"},
 *   consumes={"application/json"},
 *     @SWG\Info(
 *         version="0.1.0",
 *         title="city-call",
 *         description="API that uses a goods",
 *         @SWG\License(name="MIT")
 *     ),
 * )
 */

/**
 * @SWG\Definition(
 *   definition="item",
 *   type="object",
 *   description="an item of goods",
 *   @SWG\Property(
 *          property="title",
 *          type="string"
 *   ),
 *   @SWG\Property(
 *          property="price",
 *          type="number"
 *   ),
 *   @SWG\Property(
 *          property="description",
 *          type="string"
 *   ),
 *   @SWG\Property(
 *          property="weight",
 *          type="number"
 *   ),
 *   @SWG\Property(
 *          property="article",
 *          type="string"
 *   )
 * )
 */

// Define app routes

/**
 * @SWG\Post(
 *     path="/goods",
 *     summary="Add item to goods",
 *     @SWG\Parameter(
 *         name="item",
 *         in="body",
 *         description="property of item to add",
 *         required=true,
 *         @SWG\Schema(ref="#/definitions/item"),
 *     ),
 *     @SWG\Response(
 *         response=201,
 *         description="Successful operation",
 *     ),
 * )
 */
$app->post('/goods', function (Request $request, Response $response, array $arguments) {

    $controller = new Controller($request, $response, $arguments, Controller::POST, DATA_PATH);

    $response = $controller->process();

    return $response;
});

/**
 * @SWG\Get(
 *    path="/goods/{article}",
 *     summary="Browse an item of goods",
 *    @SWG\Parameter(
 *        name="article",
 *        in="path",
 *        type="string",
 *        required=true
 *    ),
 *    @SWG\Response(
 *       response=200,
 *       description="Successful operation",
 *        @SWG\Schema(
 *            ref="$/definitions/item"
 *        )
 *    ),
 * )
 */
$app->get('/goods/{article}', function (Request $request, Response $response, array $arguments) {

    $controller = new Controller($request, $response, $arguments, Controller::GET, DATA_PATH);

    $response = $controller->process();

    return $response;
});

/**
 * @SWG\Put(
 *     path="/goods",
 *     summary="Update an existing item at goods",
 *     @SWG\Parameter(
 *         name="item",
 *         in="body",
 *         description="property of item for update",
 *         required=true,
 *         @SWG\Schema(ref="#/definitions/item"),
 *     ),
 *     @SWG\Response(
 *         response=200,
 *         description="Successful operation",
 *     ),
 * )
 */
$app->put('/goods', function (Request $request, Response $response, array $arguments) {

    $controller = new Controller($request, $response, $arguments, Controller::PUT, DATA_PATH);

    $response = $controller->process();

    return $response;
});

/**
 * @SWG\Delete(
 *    path="/goods/{article}",
 *     summary="Remove item from goods",
 *    @SWG\Parameter(
 *        name="article",
 *        in="path",
 *        type="string",
 *        required=true,
 *    ),
 *     @SWG\Response(
 *         response=204,
 *         description="Successful operation",
 *     ),
 * )
 */
$app->delete('/goods/{article}', function (Request $request, Response $response, array $arguments) {

    $controller = new Controller($request, $response, $arguments, Controller::DELETE, DATA_PATH);

    $response = $controller->process();

    return $response;
});

return $app;
