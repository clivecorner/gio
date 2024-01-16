<?php
//Lesson 2.12  Magic methods

require __DIR__ . '/../vendor/autoload.php';

$magicMethods = new App\MagicMethods();

//The below does not work
//$magicMethods->data['test'] = 20;

//Using the __isset magic method
var_dump(isset($magicMethods->data['test']));

//Using the _call magic method
$magicMethods->process(1, 2, 3);

//Uses the __toString magic method
echo $magicMethods;