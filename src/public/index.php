<?php
//Lesson 2.28 HTTP headers
/*
Model. The model layer is responsible for the application's data (business) logic and storing and retrieving data from back-end data stores. 
The model layer might also include mechanisms for validating data and carrying out other data-related tasks. 
This layer is responsible for maintaining all aspects of the data and ensuring its integrity and accessibility.

View. The view layer provides the UI necessary to interact with the application. It includes components needed to display the data and
enables users to interact with that data. For example, the view layer might include buttons, links, tables, drop-down lists or text boxes.

Controller. The controller layer contains the application logic necessary to facilitate communications across the application, acting 
as an interface between the view and model layers. The controller is sometimes viewed as the brains of the application, keeping everything 
moving and in sync. Requests responses and handle resources.
*/

require __DIR__ . '/../vendor/autoload.php';

define('STORAGE_PATH', __DIR__ . '/../storage');
define('VIEW_PATH', __DIR__ . '/../views');


use App\View;
use App\Router;

try {
  //register routes

  $router = new Router();

  $router
    ->post('/upload', [App\Controllers\HomeController::class, 'upload'])
    ->get('/', [App\Controllers\HomeController::class, 'index'])
    ->get('/invoices', [App\Controllers\InvoiceController::class, 'index'])
    ->get('/invoices/create', [App\Controllers\InvoiceController::class, 'create'])
    ->post('/invoices/create', [App\Controllers\InvoiceController::class, 'store']);

  //Echo out the page
  echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));

}catch(\App\Exceptions\RouteNotFoundException $e){

  http_response_code(404);
  echo View::make('error/404');
}

