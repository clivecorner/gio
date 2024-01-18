<?php

namespace App;

use App\MissingBillingException;


class Invoice
{

  public function __construct(public Customer $customer)
  {

  }

  public function process(float $amount): void
  {
    if($amount <= 0){
      throw new \InvalidArgumentException('Invalid invoice amount'); // Both Exception class and Error class implement throwable
    }
    if(empty($this->customer->getBillingInfo())){
      throw new MissingBillingException;
    }
    echo 'Processing $' . $amount . ' invoice';
    sleep(2);
    echo ' OK ' . PHP_EOL;
  }

}