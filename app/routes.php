<?php

$router->get('/', ['App\Controllers\HomeController', 'show']);
$router->get('/form', ['App\Controllers\HomeController', 'edit']);
$router->post('/grazie', ['App\Controllers\MailController', 'send']);
