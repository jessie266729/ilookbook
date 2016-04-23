<?php
	header('Content-Type:text/html;charset=utf-8');
	include_once("Smarty/Smarty.class.php");
	$smarty = new Smarty();
	$smarty->config_dir = "Smarty/Config_File.class.php";
	$smarty->template_dir = "./templates";
	$smarty->compile_dir = "./templates_c";
	$smarty->cache_dir = "./caches";
	$smarty->caching = true;
	$smarty->cache_lifetime = 600;
	$smarty->left_delimiter = "{";//html使用开始
	$smarty->right_delimiter = "}";//html使用结束
?>