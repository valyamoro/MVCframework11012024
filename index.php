<?php declare(strict_types=1);

use app\core\Router;

include_once __DIR__ . '/vendor/autoload.php';

error_reporting(-1);
session_start();

$router = new Router();

$router->resolve();
