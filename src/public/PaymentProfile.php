<?php


class PaymentProfile
{
  public int $id;

  public function __construct()
  {
    # code..
    $this->id = rand();
  }

}
