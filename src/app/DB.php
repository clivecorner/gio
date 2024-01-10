<?php 

declare(strict_types=1); 

namespace App;

//A singleton class NB Constructor set to private cannot be instantiated directly  
class DB
{
  private static ?DB $instance = null;

  private function __construct(public array $config)
  {

  }

  public static function getInstance(array $config):DB
  {
    if (self::$instance === null){
      self::$instance = new DB($config);
    }

    return self::$instance;
  }


}