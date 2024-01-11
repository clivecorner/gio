<?php
//Lesson 2.8 - PHP encapsulation and abstraction.

//Encapsulation hides the internal values abstraction hides the implementation.

require __DIR__ . '/../vendor/autoload.php';

//Import class using namespace
use App\PaymentGateway\Stripe\Transaction as StripeTransaction;

//NB A static variable is a class variable
$stripeTransaction = new StripeTransaction(25);

//The below gets around the private nature of the value $amount
$reflectionProperty = new ReflectionProperty(StripeTransaction::class, 'amount');
$reflectionProperty->setAccessible(true);
$reflectionProperty->setValue($stripeTransaction, 125);
var_dump($reflectionProperty->getValue($stripeTransaction));

