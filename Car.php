<?php 

require "Vehicle.php";

class Car extends Vehicle {

	public $color;

	public function __construct( $capacity, $fuelAmount, $color ) {
		parent::__construct($capacity, $fuelAmount);
		$this->color = $color;
	}

}


$car = new Car(20, 25, 'red');
echo $car->capacity();
echo "\n";
echo $car->fuelAmount();
echo "\n";
echo 'Color is: ' . $car->color;