<?php /* Smarty version Smarty 3.1.0, created on 2016-03-21 04:36:58
         compiled from "index.php" */ ?>
<?php /*%%SmartyHeaderCode:1123356ef6c1b88d145-36367523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb6499b8e938f92a3695fff1afe57edea4b9efb7' => 
    array (
      0 => 'index.php',
      1 => 1458531393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1123356ef6c1b88d145-36367523',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_56ef6c1b97e3e',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ef6c1b97e3e')) {function content_56ef6c1b97e3e($_smarty_tpl) {?><<?php ?>?php
	header('Content-Type:text/html;charset=utf-8');
	include("smarty_inc.php");
	$row = [1,2,3];
	$smarty->assign("row",$row);
	$smarty->display("index.php");
?<?php ?>><?php }} ?>