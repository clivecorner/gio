<?php
//2.11 Interfaces and polymorphism

require __DIR__ . '/../vendor/autoload.php';


//2.11 Interfaces and polymorphism

/*Differences between Abstract classes and Interfaces

Abstract classes                        Interfaces
-contain method implementation          only contain method declaration 
-can contain properties                 only contain methods and constants
-can have private and protected methods public methods only
-extend only a single class             multiple interfaces

*/


$service = new App\DebtCollectionService();

echo $service->collectDebt(new \App\CollectionAgency);
echo $service->collectDebt(new \App\Rocky);
