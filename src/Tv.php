<?php namespace App\src;

use App\src\interfaces\{ElectricityInterface, PlayableInterface};

class Tv implements PlayableInterface
{
  protected $power;

  public function __construct(ElectricityInterface $power)
  {
    $this->power = $power;
  }


  public function play()
  {
    $power = $this->power->supplyPower();
    var_dump($power .' received. TV is playing.');
  }
}
