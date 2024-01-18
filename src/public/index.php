<?php
//Lesson 2.19 Serialize objects


require __DIR__ . '/../vendor/autoload.php';

use App\Invoice;

// echo serialize(true) . PHP_EOL;
// echo serialize(1) . PHP_EOL;
// echo serialize(2.5) . PHP_EOL;
// echo serialize('String') . PHP_EOL;
// echo serialize([1,2,3,4]) . PHP_EOL;
// echo serialize(['a' => 1, 'b' => 2]) . PHP_EOL;

//Serialization of objects maintains properties and values but does not maintain methods
// $invoice1 = new Invoice;
// $invoice3 = unserialize(serialize($invoice1));
// var_dump($invoice1);
// var_dump($invoice3);

$invoice = new Invoice(300, 'Amount of invoice', '98099030303');

$invoiceSerialized = serialize($invoice);


var_dump(unserialize($invoiceSerialized));

