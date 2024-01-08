<?php 
declare(strict_types=1);

class Transaction
{

  public ?Customer $customer = null;
  //Constructor property promotion
  public function __construct(private float $amount, private string $description)
  {
    $this->amount = $amount;
    $this->description = $description;
  }

}