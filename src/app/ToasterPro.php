<?php 
declare(strict_types=1);


namespace App;

//When deciding if inheritance in classes is a good idea we need to have an 'is a' relationship
class ToasterPro extends Toaster
{
  //NB you can't make a variable or a function less visible in the child class than in the parent class ie 
  //from public to private

  //The signature of the constructor in the child does not need to match its parent
  public function __construct()
  {
    parent::__construct();
    $this->size = 4; 
  }

  public function toastBagels(): void
  {
    foreach ($this->slices as $i => $slice) {
      echo ($i + 1) . ' : Toasting ' . $slice . ' with bagels option' .  PHP_EOL;
    }
  }

}

