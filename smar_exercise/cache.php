<?php
	header('Content-Type:text/html;charset=utf-8');
	include("smarty_cache_inc.php");
	$value = array(
		"a" => "php100",
		"b" => "java",
		"c" => "c++"
		);
	function insert_shijian(){
		return date("Y-m-d H:m:s");
	}
	$id = $_GET[id];
	// $smarty->clearAllCache();//删除所有缓存
	$smarty->assign("name",$value);
	$smarty->assign("id",$id);
	$smarty->display("cache.htm",$id);

	// $smarty->clearCache("cache.htm",$id);//删除某个id的所有缓存
?>