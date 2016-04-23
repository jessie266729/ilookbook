<?php
namespace beijing;
function getName()
{
	return "hello";
}
echo getName();//hello
// 声明命名空间
namespace dalian;
function getName()
{
	return "world"; 
}
echo getName();//world
// beijing\getName()相对路径  会寻找dalian\beijing\getName()
// \beijing\getName() 绝对路径  找到当前的getName()
echo \beijing\getName();

?>