<?php 
class Person {
	public static $name = "Muhamad";
	public static function display() {
		echo 'Welcome to dhaka';
	}
	public function getName() {
		return self::$name;
	}
}

Person::display();
echo "\n";
echo Person::$name;
echo "\n";

$obj = new Person();
$obj2 = new Person();

echo 'From Object 1 : ' . $obj->getName();
echo "\n";
echo 'From Object 2 : ' .$obj2->getName();
echo "\n";

Person::$name = 'Sarkar';

echo 'From Object 1 : ' . $obj->getName();
echo "\n";
echo 'From Object 2 : ' .$obj2->getName();