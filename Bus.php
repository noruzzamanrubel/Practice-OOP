<?php 

require "Vehicle.php";

class Bus extends Vehicle {

	public function display() {
        $this->capacity =100;
	}
    public function fuelAmount(){
        return 50;
    }
    public function message(){
        parent::message();
        echo "\n";
        echo "Welcome to Bus";
    }

}

// $bus= new Bus;
// echo $bus->fuelAmount();
// echo "\n";
// echo $bus->display();
// echo "\n";
// echo $bus->capacity();
// echo "\n";
// $bus->message();