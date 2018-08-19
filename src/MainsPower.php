<?php namespace App\src;

use App\src\interfaces\{ElectricityInterface};

class MainsPower implements ElectricityInterface
{
  protected $power;


  public function __construct()
  {
    $this->power = 'Mains Power'; //  value could be get from another source, hardcoded for example purposes
  }

  public function supplyPower()
  {
    return $this->power;
  }
}
