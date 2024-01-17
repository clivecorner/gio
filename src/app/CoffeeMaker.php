<?php

namespace App;

class CoffeeMaker
{

  public function MakeCoffee()
  {
    echo static::class . ' is making coffee' . PHP_EOL;
  }
}