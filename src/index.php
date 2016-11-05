<?php
Namespace App;

require '../vendor/autoload.php';
Use App\Core\bootstrap;
use App\Core\Router;
use App\Core\Request;


$action = Router::load('../src/routes.php')
    ->direct(Request::uri());
$controller = new $action;
echo $controller->show();
