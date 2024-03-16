<?php
//Lesson 2.32 - PDO Part 3.2 - Models & Refactoring (User and Invoice models)
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

use App\App;
use App\Config;
use App\Controllers\HomeController;
use App\Controllers\InvoiceController;
use App\Router;

//Load the environment variables stored in .env
$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$router = new Router();
try {
    //Create routes
    $router
        ->get('/', [HomeController::class, 'index'])
        ->post('/upload', [HomeController::class, 'upload'])
        ->get('/invoices', [InvoiceController::class, 'index'])
        ->get('/invoices/create', [InvoiceController::class, 'create'])
        ->post('/invoices/create', [InvoiceController::class, 'store']);

    //App gets the whole thing kicked off with 3 parameters
    (
        new App(
            //We take the now loaded router with us
            $router,
            //We have the two parameters to match to get the right controller and the right method
            [
                'uri' => $_SERVER['REQUEST_URI'],
                'method' => $_SERVER['REQUEST_METHOD'],
            ],
            //And the config details to set up the DB connection
            new Config($_ENV)
        )
    )->run();
} catch (\Exception $e) {
    echo $e->getMessage();
}
