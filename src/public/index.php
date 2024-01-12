<?php
//Lesson 2.9  - Inheritance explained  - is it good?


require __DIR__ . '/../vendor/autoload.php';

use App\Toaster;
use App\ToasterPro;


$toasterPro = new ToasterPro();


$toasterPro->addSlice('Bread');
$toasterPro->addSlice('Bread');

$toasterPro->toastBagels();
