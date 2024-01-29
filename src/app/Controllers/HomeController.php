<?php

namespace App\Controllers;

use App\View;
use App\App;

class HomeController
{

  public function index():string
  {

    $db = App::db();

    $email = "lynncorner6@gmail.com";
    $name = "Lynn Corner";
    $amount = 25;

    try {
      $db->beginTransaction();

      //Using place holders create user
      $newUserStmt = $db->prepare('INSERT INTO users (email,full_name,is_active,created_at) 
        VALUES(?,?,1,NOW())'
      );
      //Using place holders create invoice
      $newInvoiceStmt = $db->prepare('INSERT INTO invoices (amount,user_id)
        VALUES (?,?)'
      );

      $newUserStmt->execute([$email, $name]);

      $userId = (int) $db->lastInsertId();
      echo $userId . '</br>';

      $newInvoiceStmt->execute([$amount, $userId]);

      $db->commit();
    }catch (\Throwable $e){

     echo $e->getMessage() . '</br>';

      if($db->inTransaction()) {
        $db->rollBack();

      }
    }

    return  (string) View::make('index', ['foo' => 'bar']);

  }

  public function upload()
  {
  //This works for single files not arrays
   $filePath = STORAGE_PATH . '/' . $_FILES['receipt']['name'];
   move_uploaded_file($_FILES['receipt']['tmp_name'],$filePath);

   header('Location: /');
  }
}
