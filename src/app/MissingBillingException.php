<?php


namespace App;


class MissingBillingException extends \Exception
{
  protected $message = '** Missing billing information';
}