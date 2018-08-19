<?php namespace App\src;

use App\src\interfaces\{Powerableinterface, PlayableInterface};

class Soundbar implements PlayableInterface
{
  protected $power;

  public function __construct(PowerableInterface $power)
  {
    $this->power = $power;
  }


  public function play()
  {
    $power = $this->power->getPower();
    var_dump($power .' received. Soundbar is playing.');
  }
}
