<?php 

require 'Bus.php';

Class NewBus extends Bus {

}

$newbus= new NewBus;
echo $newbus->fuelAmount();
echo "\n";
echo $newbus->display();
echo "\n";
echo $newbus->capacity();
echo "\n";
$newbus->message();