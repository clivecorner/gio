<?php
//Lesson 2.7 - Static Properties & Methods

require __DIR__ . '/../vendor/autoload.php';

//Import class using namespace
use App\PaymentGateway\Stripe\Transaction as StripeTransaction;
use App\DB;

//NB A static variable is a class variable
new StripeTransaction(4, 'number 4');
$stripeTransaction = new StripeTransaction(5,'number 5');
echo $stripeTransaction::getCount();

DB::getInstance([]);

