<?php
//Lesson 2.20 PHP exceptions


require __DIR__ . '/../vendor/autoload.php';

use App\Invoice;
use App\Customer;

/*

//Errors in procedural PHP  see https://www.php.net/manual/en/errorfunc.constants.php
//error_reporting(E_ALL & ~E_WARNING);

//When triggering errors can only use E_USER errors see above link
//trigger_error('Example error', E_USER_ERROR);

function errorHandler(
  int $type,
  string $message,
  ?string $file = null,
  ?int $line = null
)
{
  echo $type . ':' . $message . ':' . $file . ':' . $line;
}

set_error_handler('errorHandler', E_ALL);

echo $x;

*/

/*

//What is an exception? An exception is an object of some exception class that describes an error. It disrupts
//the flow of the codes execution.

$customer = new Customer;
$invoice = new Invoice($customer);
try {
  $invoice->process(77);
} catch(App\MissingBillingException $e) {
  echo $e->getMessage() . ':' . $e->getLine() . ':' . $e->getFile();
} catch(\InvalidArgumentException){
  echo 'Invalid argument';
} finally {
  echo 'Something you want to run despite the exceptions';
}


*/



//For global exception handling -- NB we still need to throw an exception --- this is a catch all!!!
set_exception_handler(function (\Throwable $e) {
  echo $e->getMessage() . ' NB from message handler';
});


$customer = new Customer;
$invoice = new Invoice($customer);

$invoice->process(-45);

//Yet another approach is to use an exception class which is specific to domain, in this example InvoiceException
// In this we create a series of static methods which we throw.



