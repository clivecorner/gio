<?php
//Lesson 2.18 - Object cloning


require __DIR__ . '/../vendor/autoload.php';

use App\Invoice;

$invoice1 = new Invoice;

//When an object is cloned we create an identical but different object
$invoice2 = clone $invoice1;

var_dump($invoice1, $invoice2);

var_dump($invoice1 === $invoice2);




