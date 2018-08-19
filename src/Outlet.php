<?php namespace App\src;

use App\src\interfaces\{PowerableInterface, ElectricityInterface};

class Outlet implements PowerableInterface
{
  protected $power;


  public function __construct(ElectricityInterface $power)
  {
    $this->power = $power;
  }

  public function getPower()
  {
    return $this->power->supplyPower();
  }
}
