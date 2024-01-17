<?php

namespace App;


class Invoice
{
  public string $id;  
  public function __construct()
  {
    $this->id = uniqid('id_');
  }
  
  /**
   * create
   * uses new static to create containing class
   * @return static
   * @author clive <clivecorner@btinternet.com>
   */
  public static function create():static
  {
    return new static();
  }
  
  /**
   * __clone
   *
   * Called when the key word clone is used
   * 
   * @return void
   */
  public function __clone()
  {
    $this->id = uniqid('id_');
  }
  
}