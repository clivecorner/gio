<?php

require __DIR__ . '/../vendor/autoload.php';

//Import class using namespace
use App\PaymentGateway\Paddle\Transaction as PaddleTransaction;
use App\PaymentGateway\Stripe\Transaction as StripeTransaction;
use Ramsey\Uuid\UuidFactory;



$stripeTransaction = new StripeTransaction(3);

echo $stripeTransaction->id;


