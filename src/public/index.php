<?php
//Lesson 2.14  Traits
/*
This lesson considers the fact that php doesn't permit multiple inheritance and addresses this by using Traits
IN this context need to remember that we use the word extends for classes and implements for interfaces

Traits can be overwritten in the class which use the trait.
Trait methods have precedence over extended classes

NB Trait lesson also covers the following - the lesson examples the below have not been coded.
Conflict resolution in traits - traits may contain methods with the same names
Changing the visibility of a traits (public -> private)
Composing traits from other Traits
Properties in traits and accessing them in classes
Abstract methods in traits NB the whole trait does not need to be abstract if we have an abstract methods
Static properties and methods in Traits
*/
require __DIR__ . '/../vendor/autoload.php';


$allInOneCoffeeMaker = new App\AllInOneCoffeeMaker();

$allInOneCoffeeMaker->makeCappuccino();
$allInOneCoffeeMaker->MakeCoffee();
$allInOneCoffeeMaker->makeLatte();