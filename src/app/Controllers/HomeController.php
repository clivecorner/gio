<?php

namespace App\Controllers;

use App\View;

class HomeController
{

  public function index():string
  {

    try {
      $db = new \PDO('mysql:host=db;dbname=my_db', 'root', 'root');

      $email = "sam5@sam.com";
      $name = "Sam Smith";
      $isActive = 1;
      $createdAt = date_create()->format('Y-m-d H:i:s');



      $query = 'INSERT INTO users (email,full_name,is_active,created_at) VALUES(:email,:name,:active,:date)';
      echo $query;

      $stmt = $db->prepare($query);

            /*An alternative is to bind the VALUES
      $stmt->bindValue(':name',$name);
      $stmt->bindValue(':email',$email);
      $stmt->bindValue(':active',$active, PDO::PARAM_BOOL);
      $stmt->bindValue(':date',$date);

      $stmt->execute();

      */

      $stmt->execute([
        'email' => $email,
        'name' => $name,
        'active' => $isActive,
        'date' => $createdAt]
      );



      $id = $db->lastInsertId();

      $user = $db->query('SELECT * FROM users where id = ' . $id)->fetch();


      echo '<pre>';
      var_dump($user);
      echo '</pre>';


    }catch(\PDOException $e){
      throw new \PDOException($e->getMessage(), $e->getCode());
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
