<?php
//Lesson 2.15 Anonymous classes


require __DIR__ . '/../vendor/autoload.php';

//An anonymous class - Anonymous classes are principally used in testing
$obj = new class (1, 2, 3) {
    public function __construct(public int $i, public int $j, public int $k){


    }
 };