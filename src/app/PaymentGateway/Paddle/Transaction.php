<?php 
declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

//Import namespace
use App\Notification\Email;

class Transaction
{

 

  //Constructor property promotion
  public function __construct()
  {
    echo 'in here';

    //CustomerProfile is in the same namespace as Transaction hence we can just use its class name
    new CustomerProfile;

    //DateTime is in the global namespace hence the backslash
    new \DateTime();

    //Fully qualified name uses namespace import
    new \App\Notification\Email();

    //Not qualified name
    new Email();
  }

}