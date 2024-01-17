<?php
//Lesson 2.13 Late Static Binding
/*
Early binding at compile time and late binding at run time
*/
require __DIR__ . '/../vendor/autoload.php';

/*
$classA = new App\ClassA();
$classB = new App\ClassB();

//When getName is a non-static method the output is A and B 
echo $classA->getName() . PHP_EOL;
echo $classB->getName() . PHP_EOL;

//When getName is static the output is A and A, it should be A and B
We overcome this by using the word static - see ClassA
echo App\ClassA::getName();
echo App\ClassB::getName();

*/

//To return the object
var_dump(App\ClassA::make());
var_dump(App\ClassB::make());

