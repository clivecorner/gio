<?php

declare(strict_types=1);

namespace App;


//An abstract class - all abstract methods to be realized in child classes
abstract class Field
{
  public function __construct(protected string $name)
  {

  }

  abstract public function render(): string;
}