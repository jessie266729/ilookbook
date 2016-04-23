<?php /* Smarty version Smarty 3.1.0, created on 2016-03-21 07:31:05
         compiled from "./templates\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:2487956ef6c96381750-79401935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9465037a6fa8353fe6258d853d365bf9e69cc327' => 
    array (
      0 => './templates\\index.htm',
      1 => 1458541860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2487956ef6c96381750-79401935',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_56ef6c96465f2',
  'variables' => 
  array (
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ef6c96465f2')) {function content_56ef6c96465f2($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<link href="/tujia/add/css/bootstrap.min.css" rel="stylesheet">
    	<script src="/tujia/add/js/jquery-1.9.1.js"></script>
    	<script src="/tujia/add/js/bootstrap.min.js"></script> 
	</head>
	<body>
		<div class="dropdown">
		   <button type="button" class="btn dropdown-toggle" id="dropdownMenu1" 
		      data-toggle="dropdown">
		      主题
		      <span class="caret"></span>
		   </button>
		   <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
		      <li role="presentation">
		         <a role="menuitem" tabindex="-1" href="#"><?php echo $_smarty_tpl->tpl_vars['row']->value[0];?>
</a>
		      </li>
		      <li role="presentation">
		         <a role="menuitem" tabindex="-1" href="#"><?php echo $_smarty_tpl->tpl_vars['row']->value[1];?>
</a>
		      </li>
		      <li role="presentation">
		         <a role="menuitem" tabindex="-1" href="#"><?php echo $_smarty_tpl->tpl_vars['row']->value[2];?>
</a>
		      </li>
		      <li role="presentation" class="divider"></li>
		      <li role="presentation">
		         <a role="menuitem" tabindex="-1" href="#"><?php echo $_smarty_tpl->tpl_vars['row']->value[3];?>
</a>
		      </li>
		   </ul>
		</div>
	</body>
</html><?php }} ?>