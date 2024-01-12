<?php 
declare(strict_types=1);


namespace App;


//use of the word final a class - adding final prior to the class name would mean the class could not be extended.
class Toaster
{
  protected array $slices;
  protected int $size;


  public function __construct()
  {
    $this->slices = [];
    $this->size = 2;
  }

  //Adding final to a function means that a function cannot be overwritten 
  public function addSlice(string  $slice): void
  {
    if (count($this->slices) < $this->size) {
      $this->slices[] = $slice;
    }
  }

  public function toast(): void
  {
    foreach ($this->slices as $i => $slice) {
      echo ($i + 1) . ' : Toasting ' . $slice . PHP_EOL;
    }
  }

}

