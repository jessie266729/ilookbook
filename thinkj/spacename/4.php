<?php
// 子空间-引入命名空间应用
namespace beijing\chaoyang;
class Person{
	static $name = "chaoyangren";
}
namespace tianjin\hexi;
function getName(){
	return "hexi";
}
class Person{
	static $name = "hexiren";
}
// use beijing\chaoyang\Person;
// echo Person::$name;
// use beijing\chaoyang;
// echo Person::$name;
// 引入空间和元素（别名使用）
// use beijing\chaoyang\Person as pon;
// echo pon::$name;
use beijing\chaoyang;
echo Person::$name;//hexiren
echo "<br/>";
echo chaoyang\Person::$name;
?>