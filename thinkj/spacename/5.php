<?php
// 命名空间的第一个namespace声明之前不能有任何代码
namespace beijing;
include("./common.php");
function getName(){
	return "beijing";
}
// 访问公共空间
echo \getName();
?>