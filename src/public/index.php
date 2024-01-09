<?php

//NB the question remains why we have to require or include a file, and when this file includes a class import this class???

//Classes and Objects

require_once('../PaymentGateway/Paddle/Transaction.php');
require_once('../PaymentGateway/Stripe/Transaction.php');
require_once('../PaymentGateway/Paddle/CustomerProfile.php');
require_once('../Notification/Email.php');

//Import class using namespace
use PaymentGateway\Paddle\Transaction as PaddleTransaction;
use PaymentGateway\Stripe\Transaction as StripeTransaction;


new PaddleTransaction;
new StripeTransaction;

//Name-spacing of functions - functions are by default namespaced to the global environment.
//We can use a '\' to say we want to use the global name space
var_dump(\explode('?', 'Hello?World'));
