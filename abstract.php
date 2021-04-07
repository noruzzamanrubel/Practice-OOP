<?php 

abstract class Vehicle{
    public function display(){
        return "Welcome";
    }
    abstract public function capacity();
    abstract public function fuelAmount();
}

class Bus extends Vehicle {
    public function capacity(){
        return 15;
    }
    public function fuelAmount(){
        return 20;
    }
}

$bus= new Bus;
echo $bus->display();
echo "\n";
echo $bus->capacity();
echo "\n";
echo  $bus->fuelAmount();