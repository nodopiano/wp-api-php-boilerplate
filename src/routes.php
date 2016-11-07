<?php

$router->define([
    '' => 'App\Controllers\HomeController@show',
    'apidemo' => 'App\Controllers\HomeController@apiDemo',
    'form' => 'App\Controllers\HomeController@edit',
    'mail/send' => 'App\Controllers\MailController@send',
]);
