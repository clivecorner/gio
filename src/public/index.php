<?php

//NB the question remains why we have to require or include a file, and when this file includes a class import this class???

//Classes and Objects
/*
require_once(__DIR__ .'/../app/PaymentGateway/Paddle/Transaction.php');
require_once(__DIR__ .'/../app/PaymentGateway/Stripe/Transaction.php');
require_once(__DIR__ .'/../app/PaymentGateway/Paddle/CustomerProfile.php');
require_once(__DIR__. '/../app/Notification/Email.php');
*/

spl_autoload_register(
  function($class){

    $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/',$class). '.php');
    echo $class;
    echo $path;
    require $path;

  }
);



//Import class using namespace
use App\PaymentGateway\Paddle\Transaction as PaddleTransaction;
use App\PaymentGateway\Stripe\Transaction as StripeTransaction;


new PaddleTransaction;
new StripeTransaction;

//Name-spacing of functions - functions are by default namespaced to the global environment.
//We can use a '\' to say we want to use the global name space
var_dump(\explode('?', 'Hello?World'));
