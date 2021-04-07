<?php 

interface Vehicle{
    public function capacity();
    public function fuelAmount();
}

class Bus implements Vehicle {
    public function capacity(){
        return 15;
    }
    public function fuelAmount(){
        return 20;
    }
}

$bus= new Bus;
echo $bus->capacity();
echo "\n";
echo  $bus->fuelAmount();