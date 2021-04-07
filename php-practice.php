<?php 

class Math {
    public $a = 20;
    public $b = 10;

    public function sum (){
        $c = $this->a + $this->b;
        return $c;
    }

    public function sum_result(){
        $this->a =50;

        $result = $this->sum();
        
        echo "Sum is $result";
    }
}

$math = new Math();
echo $math->sum();
echo "\n";
$math->b=50;
$math->sum_result();

