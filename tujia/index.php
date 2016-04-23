<?php
	header('Content-Type:text/html;charset=utf-8');
	include("smarty_inc.php");
	$row = ["Java","C","php","html"];
	$smarty->assign("row",$row);
	$smarty->display("index.htm");
?>