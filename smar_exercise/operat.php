<?php
	header('Content-Type:text/html;charset=utf-8');
	//一维数组  包含文件  处理文本  去除空格  条件语句
	include("smarty_inc.php");
	$value = array(1,2,5,3,9,6,8);
	$test = array("a"=>"我是1","b"=>"我是2","c"=>"我是3");
	$smarty->assign("val",$value);
	$smarty->assign("test",$test);
	$smarty->display("operat.htm");
?>