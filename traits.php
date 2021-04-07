<?php 

class PrantClass{
    public function sayHi(){
        return 'Hi from parent class';
    }
}

trait Foo{
    public function display(){
        return 'Welcome to Foo';
    }
}

trait bar {
    public function message(){
        return 'Welcome to bar';
    }
}

class childClass extends PrantClass{
    use Foo;
    use bar;
    public function anotherDisplay(){
        return 'Welcome to child class';
    }
}

$obj= new childClass();
echo $obj->sayHi();
echo "\n";
echo $obj->display();
echo "\n";
echo $obj->message();
echo "\n";
echo $obj->anotherDisplay();