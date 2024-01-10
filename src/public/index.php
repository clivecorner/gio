<?php
//Lesson 2.6 - Class Constants

require __DIR__ . '/../vendor/autoload.php';

//Import class using namespace
use App\PaymentGateway\Paddle\Transaction as PaddleTransaction;
use App\PaymentGateway\Stripe\Transaction as StripeTransaction;
use APP\Enums\Status;

$stripeTransaction = new StripeTransaction();

$stripeTransaction->setStatus(Status::PAID);

echo $stripeTransaction->getStatus();



