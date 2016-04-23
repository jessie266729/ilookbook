<?php
	header('Content-Type:text/html;charset=utf-8');
	include("smarty_inc.php");
	$name[] = array("name"=>"新闻第一条","date"=>"2016-3-17");
	$name[] = array("name"=>"新闻第二条","date"=>"2016-3-17");
	$name[] = array("name"=>"新闻第三条","date"=>"2016-3-17");
	$name[] = array("name"=>"新闻第四条","date"=>"2016-3-17");
	$name[] = array("name"=>"新闻第五条","date"=>"2016-3-17");
	$name[] = array("name"=>"新闻第六条","date"=>"2016-3-17");
	$row = array("标题","作者","当前页面");
	$smarty->assign("title",$name);
	$smarty->assign("row",$row);
	$smarty->display("index.htm");
?>