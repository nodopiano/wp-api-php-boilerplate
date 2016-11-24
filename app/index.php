<?php
Namespace App;

require '../vendor/autoload.php';
Use Nodopiano\Corda\Bootstrap;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;
use Nodopiano\Corda\Request;
use Nodopiano\Corda\App;

Bootstrap::boot(__dir__);

$router = new RouteCollector();
require '../app/routes.php';
$router->get('{catchAll}', ['Nodopiano\Corda\Controller','notFound']);

$dispatcher = new Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
// Print out the value returned from the dispatched function
$response->render();
