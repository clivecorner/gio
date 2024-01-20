<?php
//Lesson 2.24 GET and POST Super Globals in PHP forms

require __DIR__ . '/../vendor/autoload.php';


//register routes

$router = new App\Router();


$router
  ->get('/', [App\Classes\Home::class, 'index'])
  ->get('/invoice', [App\Classes\Invoice::class, 'index'])
  ->get('/invoice/create', [App\Classes\Invoice::class, 'create'])
  ->post('/invoice/create', [App\Classes\Invoice::class, 'store']);

  echo $router->resolve($_SERVER['REQUEST_URI'],strtolower($_SERVER['REQUEST_METHOD']));


