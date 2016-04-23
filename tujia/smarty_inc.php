<?php
	header('Content-Type:text/html;charset=utf-8');
	include_once("smarty/Smarty.class.php");//包含smarty类文件
	$smarty = new Smarty();             //建立smarty实例对象$smarty
	$smarty->config_dir = "smarty/Config_File.class.php"; //目录变量
	$smarty->template_dir = "./templates";  //模板目录
	$smarty->compile_dir = "./templates_c"; //编译目录
	$smarty->caching = false;               //是否开启缓存
	$smarty->cache_dir = "./caches";        //缓存目录
	$smarty->left_delimiter = "{";          //html中开始标识
	$smarty->right_delimiter = "}";         //html中结束标识
?>