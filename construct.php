<?php 

class Math {

	public $a;
	public $b;
	
	public function __construct($first, $second) {
		$this->a = $first;
		$this->b = $second;
		$this->mul(1);
	}

	public function sum() {
		echo $this->a + $this->b;
	}
	public function mul($c) {
		echo $this->a + $this->b + $c;
	}

}

$obj = new Math(2, 2);
$obj->sum();
echo "\n";

$obj2 = new Math(5, 2);
$obj2->sum();
echo "\n";
