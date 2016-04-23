<?php
	header('Content-Type:text/html;charset=utf-8');
	include_once("Smarty/Smarty.class.php");//包含smarty类文件
	$smarty = new Smarty();//建立smarty实例对象$smarty
	$smarty->config_dir = "Smarty/Config_File.class.php";//目录变量
	$smarty->caching = false;//是否开启缓存
	$smarty->template_dir = "./templates";//模板目录
	$smarty->compile_dir = "./templates_c";//编译目录
	$smarty->cache_dir = "./smarty_cache";//缓存文件夹
	$smarty->left_delimiter = "{";//html使用开始
	$smarty->right_delimiter = "}";//html使用结束
?>