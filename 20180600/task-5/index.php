<?php
define('APPLICATION_ROOT', realpath(__DIR__) . DIRECTORY_SEPARATOR . '..');

require APPLICATION_ROOT . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

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
 *         title="storage-for-all-things",
 *         description="API that uses a storage-for-all-things",
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
 *          property="id",
 *          type="int"
 *   ),
 *   @SWG\Property(
 *          property="title",
 *          type="string"
 *   ),
 *   @SWG\Property(
 *          property="price",
 *          type="float"
 *   ),
 *   @SWG\Property(
 *          property="description",
 *          type="string"
 *   ),
 *   @SWG\Property(
 *          property="weight",
 *          type="float"
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
 *     summary="Add empty item to goods",
 *     @SWG\Response(
 *         response=201,
 *         description="Successful operation",
 *        @SWG\Schema(
 *            ref="$/definitions/item"
 *        )
 *     ),
 * )
 */
$app->post('/goods', function (Request $request, Response $response, array $arguments) {

    $controller = new Controller($request, $response, $arguments, Controller::POST);

    $response = $controller->process();

    return $response;
});

/**
 * @SWG\Get(
 *    path="/goods/{id}",
 *     summary="Browse an item of goods",
 *    @SWG\Parameter(
 *        name="id",
 *        in="path",
 *        type="int",
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
$app->get('/goods/{id}', function (Request $request, Response $response, array $arguments) {

    $controller = new Controller($request, $response, $arguments, Controller::GET);

    $response = $controller->process();

    return $response;
});

/**
 * @SWG\Put(
 *     path="/goods/{id}",
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

    $controller = new Controller($request, $response, $arguments, Controller::PUT);

    $response = $controller->process();

    return $response;
});

/**
 * @SWG\Delete(
 *    path="/goods/{id}",
 *     summary="Remove item from goods",
 *    @SWG\Parameter(
 *        name="id",
 *        in="path",
 *        type="int",
 *        required=true,
 *    ),
 * )
 */
$app->delete('/goods/{id}', function (Request $request, Response $response, array $arguments) {

    $controller = new Controller($request, $response, $arguments, Controller::DELETE);

    $response = $controller->process();

    return $response;
});
