<?php 

class PrantClass{
    public function sayHi(){
        return 'Hi';
    }
}
trait Foo{
    public function display(){
        return 'Welcome to Foo';
    }
}

trait bar {
    public function message(){
        return 'Hey, How are you';
    }
}

class childClass extends PrantClass{
    use Foo;
    use bar;
    public function anotherDisplay(){
        return 'Welcome to Another Display';
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