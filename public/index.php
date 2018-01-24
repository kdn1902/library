<?php

use \Core\Router;


define('WWW',__DIR__ ) . '/';
define('CONFIG',dirname(__DIR__ ) . '/config/');
define('CORE',dirname(__DIR__ ).'/Core/');
define('ROOT',dirname(__DIR__ ).'/');
define('APP',dirname(__DIR__ ).'/App/');

require_once ROOT . 'vendor/autoload.php';

$routes = require_once(CONFIG . 'routes.php');
session_start();
Router::addRoute($routes);
Router::dispatch();
