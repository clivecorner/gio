<?php

namespace App;


class ClassA
{
  protected static string $name = 'A';

  public static function getName():string
  {
    //return self::$name;

    //use of the word static overcomes the issue of late static binding
    return static::$name;
  }

  public static function make():static
  {
    return new static();
  }

}