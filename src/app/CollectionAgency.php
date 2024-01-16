<?php 

namespace App;


//We can have only one class in respect to inheritance but many interfaces is possible
class CollectionAgency implements DebtCollector
{


  public function collect(float $owedAmount): float
  {
    $guaranteedAmount = $owedAmount * 0.5;
    return mt_rand($guaranteedAmount, $owedAmount);
  }

}


