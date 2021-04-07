<?php

// class Vehicle
// {

//     public $capacity = 15;

//     public function fuelAmount()
//     {
//         return 10;
//     }

//     public function capacity()
//     {
//         return $this->capacity;
//     }

//     public function applyBrakes()
//     {
//         return 'Braked';
//     }

//     public function message()
//     {
//         echo "Welcome to Vehicle ";
//     }
// }

class Vehicle {
	
	public $capacity;
	public $fuelAmount;


	public function __construct( $capacity, $fuelAmount ) {
		$this->capacity 	= $capacity;
		$this->fuelAmount 	= $fuelAmount;
	}

	public function fuelAmount() {
		return $this->fuelAmount;
	}

	public function capacity() {
		return $this->capacity;
	}

	public function applyBrakes() {
		return 'Braked';
	}
}
