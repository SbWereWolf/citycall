<?php

use Goods\StupidController;

if (!defined('APPLICATION_ROOT')) {
    define('APPLICATION_ROOT', realpath(__DIR__));
}

require APPLICATION_ROOT . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

if (!defined('DATA_PATH')) {
    define('DATA_PATH', APPLICATION_ROOT . DIRECTORY_SEPARATOR . 'sqlite-db' . DIRECTORY_SEPARATOR . 'goods.sqlite');
}

ob_start();

$method = strtoupper($_SERVER['REQUEST_METHOD']);
$uri = trim($_SERVER['REQUEST_URI'], '/');

$parameters = explode('/', $uri, 2);

$isProper = $parameters[0] == 'goods';

if ($isProper) {
    $isProper = $method == StupidController::GET
        || $method == StupidController::DELETE
        || $method == StupidController::POST
        || $method == StupidController::PUT;
}

$body = '';
if ($isProper) {
    switch ($method) {
        case StupidController::GET:
        case StupidController::DELETE:

            $isProper = count($parameters) > 1;

            break;
        case StupidController::POST:
        case StupidController::PUT:

            $stream = fopen('php://input', 'r');
            $body = stream_get_contents($stream);

            $isProper = !empty($body);

            break;
    }
}

$isSuccess = false;
$controller = null;
if ($isProper) {
    $controller = new StupidController($method, $parameters, $body, DATA_PATH);
    $isSuccess = $controller->process();
}

if (!$isSuccess) {
    http_response_code(500);
}
if ($isSuccess) {
    switch ($method) {
        case StupidController::GET:
        case StupidController::PUT:
            http_response_code(200);

            break;
        case StupidController::POST:
            http_response_code(201);

            break;
        case StupidController::DELETE:
            http_response_code(204);

            break;
    }
}

if ($isSuccess && $method == StupidController::GET) {

    $item = $controller->getItem();
    $presentation = json_encode($item);

    header('Content-Type: application/json');
    echo $presentation;
}

$output = ob_get_clean();

echo $output;
