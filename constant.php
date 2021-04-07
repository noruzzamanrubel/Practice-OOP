<?php 

class testConstant {
    const PI = 3.1416;
    public function area($r){
        return self:: PI * $r *$r;
    }
}

$obj= new testConstant;
echo $obj->area(2);
