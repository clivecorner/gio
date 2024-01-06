<?php

//Classes and Objects

require_once 'Transaction.php';

$transaction = (new Transaction(25,'25 quid'))
  ->applyDiscount(2)
  ->addTax(10);

//var_dump($transaction->getAmount());

$str = '{"a":1,"b":2,"c":3}';

$arr = json_decode($str);

var_dump($arr->c);

$obj = new \stdClass();

$obj->a = 1;
$obj->b = 2;

var_dump($obj);


