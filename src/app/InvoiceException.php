<?php


namespace App;


class InvoiceException
{

  public function __construct(public string $message)
  {

  }
  public static function missingBillingInformation():static
  {

      return new static('Missing billing information');
  }
  public static function invalidAmount():static
  {
      return new static('Invalid amount');
  }


} 