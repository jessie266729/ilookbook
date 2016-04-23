<?php
// 子空间使用
namespace beijing\haidian;
function getName(){
	return "haidian";
}
namespace hebei\handan;
function getName(){
	return "handan";
}
namespace beijing\chaoyang;
function getName(){
	return "chaoyang";
}
namespace beijing\changping;
function getName(){
	return "changping";
}
echo getName();
echo "<br/>";
echo \beijing\chaoyang\getName();
echo "<br/>";
echo \hebei\handan\getName();
?>