<?php

$router->define([
    '' => 'App\Controllers\HomeController',
    'about' => 'controllers/about.php',
    'about/culture' => 'controllers/about-culture.php',
    'contact' => 'controllers/contact.php'
]);
