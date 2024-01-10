<?php 
declare(strict_types=1);

namespace App\PaymentGateway\Stripe;

use App\Enums\Status;

class Transaction
{
  private string $status;
  
  //Constructor property promotion
  public function __construct()
  {
    $this->setStatus(Status::PENDING);
  } 

  public function setStatus(string $status):self
  {
    if(! isset(Status::ALL_STATUSES[$status])){
      throw new \InvalidArgumentException('Invalid status');
    }

    $this->status = $status;

    return $this;
  }

  public function getStatus():string
  {
    return $this->status;
  }



}