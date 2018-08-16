<?php namespace App\src;

use App\src\interfaces\{ElectricityInterface, PlayableInterface};

class Soundbar implements PlayableInterface
{
  public function play(ElectricityInterface $power)
  {
    var_dump($power .' received. Soundbar is playing.');
  }
}
