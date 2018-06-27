<?php

$app = require_once('app.php');

try {
    $app->run();
} catch (Exception $e) {
    echo $e->getMessage();
}
