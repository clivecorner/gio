<?php


namespace App;

class DebtCollectionService
{
    //NB polymorphism
    public function collectDebt(DebtCollector $collector )
    {
    $owedAmount = mt_rand(100, 1090);
    $collectedAmount = $collector->collect($owedAmount);

    echo 'Collected $' . $collectedAmount . ' out of $' . $owedAmount . PHP_EOL;

    }

}