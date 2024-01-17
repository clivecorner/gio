<?php
//Lesson 2.16 - PHP variable storage and Object comparison 


require __DIR__ . '/../vendor/autoload.php';

use App\Invoice;


$invoice1 = new Invoice(25, 'My invoice 1');
$invoice2 = new Invoice(100, 'My invoice 2');

//For the below to be true all that is required is that the object is the same class and the values of properties are the same
echo 'Invoice 1 == Invoice 2'. PHP_EOL;
var_dump($invoice1 == $invoice2);


//For the below to be true, which it is not, $invoice1 and $invoice2 would have to pointing to the same place in the memory
echo 'Invoice 1 === Invoice 2' . PHP_EOL;
var_dump($invoice1 === $invoice2);
