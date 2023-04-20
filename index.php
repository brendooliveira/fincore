<?php

use BRdev\Router\Router;

require __DIR__ . '/vendor/autoload.php';

//namespace
Router::namespace('App\Controller');
Router::get('/', 'Web@home');
Router::get('/error/{code}', 'Web@error');

Router::dispatch();

if (Router::getError()) {
    Router::redirect('/error/' . Router::getError());
}
