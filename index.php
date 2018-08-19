<?php require 'vendor/autoload.php';

use App\src\{SoundBar,Tv, Outlet,SolarEnergy, MainsPower};

$energy = new SolarEnergy();
$mainsPower = new MainsPower();

$outlet = new Outlet($energy);

$soundbar = new SoundBar($outlet);
$tv = new Tv($mainsPower);


$soundbar->play();
echo '</br>';
$tv->play();
