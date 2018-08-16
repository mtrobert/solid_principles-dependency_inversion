<?php namespace App\src\interfaces;

use App\src\interfaces\ElectricityInterface;

interface PlayableInterface
{
  public function play(ElectricityInterface $power);
}
