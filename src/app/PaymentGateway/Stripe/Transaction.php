<?php 
declare(strict_types=1);

namespace App\PaymentGateway\Stripe;

class Transaction
{

  
  
  //Constructor property promotion
  public function __construct(public int $id)
  {
    $this->id = $id;
  }

}