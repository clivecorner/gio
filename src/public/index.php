<?php

//Classes and Objects

require_once 'Transaction.php';
require_once 'PaymentProfile.php';
require_once 'Customer.php';


$transaction = new Transaction(5,'Test');

//Use of the null safe operator - once null is encountered the remainder to the the right is discarded 
echo $transaction->customer?->paymentProfile?->id;


