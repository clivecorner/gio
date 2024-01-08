<?php



class Customer
{
  public function __construct(public ?PaymentProfile $paymentProfile = null)
  {
    # code...
  }
}