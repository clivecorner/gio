<?php

namespace App;

class MagicMethods
{

  private array $data = ['test'];
  
  public function __get(string $name)
  {
    if(array_key_exists($name, $this->data)){
      return $this->data[$name];
    }
    return null;
  }

  public function __set($name,$value ):void
  {
    
    $this->data[$name] = $value;
  }

  public function __isset(string $name):bool
  {
    return array_key_exists($name, $this->data);
  }

  public function __unset($name):void 
  {
    unset($this->data[$name]);
  }

  public function __call(string $name,$arguments )
  {
    var_dump($name, $arguments);
  }

  public function __toString():string
  {
    return 'When attempting to print the object the magic method  __toString method is called by default.';
  }

}