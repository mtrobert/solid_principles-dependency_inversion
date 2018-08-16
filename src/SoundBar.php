<?php namespace App\src;

use App\src\interfaces\{ElectricityInterface, PlayableInterface};

class Soundbar implements PlayableInterface
{
  protected $energy;

  public function __construct(ElectricityInterface $energy)
  {
    $this->energy = $energy;
  }


  public function play()
  {
    $power = $this->energy->supplyPower();
    var_dump($power .' received. Soundbar is playing.');
  }
}
