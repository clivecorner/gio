<?php

namespace App\Controllers;

use App\View;

class HomeController
{

  public function index():string
  {
  
   return  (string) View::make('index', ['foo' => 'bar']);
  }

  public function upload()
  {
  //This works for single files not arrays
   $filePath = STORAGE_PATH . '/' . $_FILES['receipt']['name'];
   move_uploaded_file($_FILES['receipt']['tmp_name'],$filePath);

    return View::make('upload'); 
  }
}
