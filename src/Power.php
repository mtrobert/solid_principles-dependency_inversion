<?php namespace App\src;

use App\src\interfaces\ElectricityInterface;

class Power
{
  protected $power;


  public function __construct(ElectricityInterface $power)
  {
    $this->power = $power; //  value could be get from another source, hardcoded for example purposes
  }

  public function supplyPower()
  {
    return $this->power->getPower();
  }
}
