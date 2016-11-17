<?php
Namespace App;

require '../vendor/autoload.php';
Use Nodopiano\Corda\Bootstrap;
use Nodopiano\Corda\Router;
use Nodopiano\Corda\Request;
use Nodopiano\Corda\App;

App::bind('config', require 'config/config.php');
App::bind('api', require 'config/api.php');

Bootstrap::boot(__dir__.'/..');

echo Router::load('../app/routes.php')
    ->direct(Request::uri());

