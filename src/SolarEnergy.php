<?php namespace App\src;

use App\src\interfaces\{ElectricityInterface};

class SolarEnergy implements ElectricityInterface
{
  protected $power;


  public function __construct()
  {
    $this->power = 'Solar Energy'; //  value could be get from another source, hardcoded for example purposes
  }

  public function supplyPower()
  {
    return $this->power;
  }
}
