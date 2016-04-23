<?php
	header("Content-Type:text/html;charset=utf8");
	include_once("global.php");
	$query = $db->query("select * from `p_config`");
	$row = $db->fetch_array($query);

	$smarty->assign("row",$row[name]);
	$smarty->display("index.html");
?>