<?php
Namespace App;

require '../vendor/autoload.php';
Use Nodopiano\Corda\Bootstrap;
use Nodopiano\Corda\Router;
use Nodopiano\Corda\Request;
use Nodopiano\Corda\App;

Bootstrap::boot(__dir__);

$response = (new Router)->load('../app/routes.php')->direct();
$response->render();
