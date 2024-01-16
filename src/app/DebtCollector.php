<?php 

namespace App;


interface DebtCollector{

  // NB we cannot have properties in interfaces though we can have constantsdd

  public function collect(float $owedAmount): float;
}