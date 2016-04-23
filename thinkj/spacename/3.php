<?php
namespace beijing;
function getName(){
	return "beijing";
}
namespace shanghai;
function getName(){
	return "shanghai";
}
class Person{
	static $name = "shanghairen";
}
namespace nanjing;
function getName(){
	return "nanjing";
}
use shanghai\Person;
echo Person::$name;
echo "<br/>";
use shanghai;
echo Person::$name;
?>