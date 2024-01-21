<?php
//Lesson 2.26 PHP files uploads 



require __DIR__ . '/../vendor/autoload.php';


/* php.ini stuff 
max_input_time
max_file_uploads
upload_max_filesize
upload_tmp_dir
*/
define('STORAGE_PATH', __DIR__ . '/../storage');


//register routes

$router = new App\Router();


$router
  ->post('/upload', [App\Classes\Home::class, 'upload'])
  ->get('/', [App\Classes\Home::class, 'index'])
  ->get('/invoice', [App\Classes\Invoice::class, 'index'])
  ->get('/invoice/create', [App\Classes\Invoice::class, 'create'])
  ->post('/invoice/create', [App\Classes\Invoice::class, 'store']);

  echo $router->resolve($_SERVER['REQUEST_URI'],strtolower($_SERVER['REQUEST_METHOD']));



