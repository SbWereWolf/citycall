<?php
/**
 * city-call
 * Copyright © 2018 Volkhin Nikolay
 * 01.07.18 23:03
 */

if (!defined('APPLICATION_ROOT')) {
    define('APPLICATION_ROOT', realpath(__DIR__) . DIRECTORY_SEPARATOR . '..');
}

require APPLICATION_ROOT . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

if (!defined('DATA_PATH')) {
    define('DATA_PATH', APPLICATION_ROOT . DIRECTORY_SEPARATOR . 'sqlite-db' . DIRECTORY_SEPARATOR . 'goods.sqlite');
}
