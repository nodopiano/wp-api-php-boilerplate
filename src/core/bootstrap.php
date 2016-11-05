<?php
Namespace App\core;

$app = [];

$app['config'] = require 'config/config.php';

Use App\Core\Router;
Use App\Core\Request;
//require 'core/database/Connection.php';
//require 'core/database/QueryBuilder.php';

//$app['database'] = new QueryBuilder(
//    Connection::make($app['config']['database'])
//);
