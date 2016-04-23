<?php
	header('Content-Type:text/html;charset=utf-8');
	include("smarty_cache_inc.php");
	include("all_mysql.php");
	if($_GET[id]){
		$sql = "SELECT * FROM `newtable` WHERE id=".$_GET[id];
		$query = $db->query($sql);
		$row = $db->fetch_array($query);
		$db->query("update newtable set salary=salary+1 where id=".$_GET[id]);
	}
	function insert_hit(){
		global $row;
		return $row[2];
	}
	$smarty->assign("row",$row);
	$smarty->display("all.htm");
?>