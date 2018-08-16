<?php namespace App\src;

use App\src\interfaces\ElectricityInterface;

class Energy implements ElectricityInterface
{
  protected $power;


  public function __construct()
  {
    $this->power = 'Power'; //  value could be get from another source, hardcoded for example purposes
  }

  public function supplyPower()
  {
    return $this->power;
  }
}
