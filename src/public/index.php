<?php
//Lesson 2.23 Super Globals - basic routing using the server information

require __DIR__ . '/../vendor/autoload.php';

/*variables
Server 
$_SERVER,$_GET,$_POST,$_FILES,$_COOKIE,$_SESSION,$_REQUEST,$_ENV

https://www.php.net/manual/en/reserved.variables.php <- predefined variables
*/

//register routes

$router = new App\Router();

/* The simple way to register routes
$router->register(
  '/',
  function () {
    echo 'Home';
  }
);


$router->register(
  '/invoices',
  function () {
    echo 'Invoices';
  }
);
*/

$router
  ->register('/', [App\Classes\Home::class, 'index'])
  ->register('/invoice', [App\Classes\Invoice::class, 'index'])
  ->register('/invoices/create', [App\Classes\Invoice::class, 'create']);

  echo $router->resolve($_SERVER['REQUEST_URI']);


