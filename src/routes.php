<?php

$router->define([
    '' => 'App\Controllers\HomeController@show',
    'form' => 'App\Controllers\HomeController@edit',
    'mail/send' => 'App\Controllers\MailController@send',
]);
