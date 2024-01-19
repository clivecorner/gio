<?php
//Lesson 2.22 Iterators and iterable type

require __DIR__ . '/../vendor/autoload.php';

$invoice = new App\Invoice(25);

//Iterating over an object
foreach($invoice as $key => $value){
  //echo $key . '  =  ' . $value . PHP_EOL;
}


$invoiceCollection = new App\InvoiceCollection([new App\Invoice(25), new App\Invoice(100), new App\Invoice(40)]);


foreach($invoiceCollection as $invoice){

  echo $invoice->id . ' = ' . $invoice->amount . PHP_EOL;
}

//Also includes using the iterator Aggregates 