<?php
//Lesson 2.25 PHP Sessions and Cookies
//NB the session id remains constant throughout a session and is stored on the users browser
//it is a particular type of Cookie



require __DIR__ . '/../vendor/autoload.php';

session_start();


//register routes

$router = new App\Router();


$router
  ->get('/', [App\Classes\Home::class, 'index'])
  ->get('/invoice', [App\Classes\Invoice::class, 'index'])
  ->get('/invoice/create', [App\Classes\Invoice::class, 'create'])
  ->post('/invoice/create', [App\Classes\Invoice::class, 'store']);

  echo $router->resolve($_SERVER['REQUEST_URI'],strtolower($_SERVER['REQUEST_METHOD']));



