<?php 
declare(strict_types=1);

namespace App\PaymentGateway\Stripe;


class Transaction
{

  private float $amount;
  
  //Constructor property promotion
  public function __construct(float $amount)
  {
    $this->amount = $amount;
  
    
  } 


 


}