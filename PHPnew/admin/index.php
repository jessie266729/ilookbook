<?php
	header("Content-Type:text/html;charset=utf8");
	include_once("admin_global.php");
	$query = $db->query("select * from `p_admin`");
	$row = $db->fetch_array($query);
	if($username=$_GET[username])
		echo $username;
	// $smarty->assign("row",$row[name]);
	// $smarty->display("index.html");
?>