<?php
Namespace App;

require '../vendor/autoload.php';
Use App\Core\Bootstrap;
use App\Core\Router;
use App\Core\Request;
use App\Core\App;

App::bind('config', require 'core/config/config.php');
Bootstrap::boot();

echo Router::load('../src/routes.php')
    ->direct(Request::uri());

