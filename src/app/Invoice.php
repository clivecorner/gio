<?php

namespace App;


class Invoice
{
  private string $id;

  public function __construct(
    public float $amount,
    public string $description,
    public string $creditCardNumber
  ) {
    $this->id = uniqid('id_');

  }
  
  public function __serialize():array
  {
    return [
      'id' => $this->id,
      'amount' => $this->amount,
      'description' => $this->description,
      'creditCardNumber' => base64_encode($this->creditCardNumber)
    ];
  }

  public function __unserialize(array $data ):void 
  {
    $this->amount = $data['amount'];
    $this->description = $data['description'];
    $this->id = $data['id'];
    $this->creditCardNumber = base64_decode('creditCardNumber');
    $foo = 'bar';

  }
  
}