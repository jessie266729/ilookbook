<?php
function getName(){
	return "I am first";
}
class Person{
	static $name = "first person";
}
include "./common2.php";
// echo \getName();//I am first
// echo "<br/>";
// echo getName();//I am first
// echo "<br/>";
// echo beijing\getName();
use beijing\Person as pon;
echo pon::$name;
?>