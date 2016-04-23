<?php /* Smarty version Smarty 3.1.0, created on 2016-03-18 02:50:28
         compiled from "./templates\all.htm" */ ?>
<?php /*%%SmartyHeaderCode:1303956eb59b7d51c44-60982011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '114887bbaa65d77c388a387b1e5725259a7dca5e' => 
    array (
      0 => './templates\\all.htm',
      1 => 1458265727,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1303956eb59b7d51c44-60982011',
  'function' => 
  array (
  ),
  'cache_lifetime' => 600,
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_56eb59b7e2674',
  'variables' => 
  array (
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56eb59b7e2674')) {function content_56eb59b7e2674($_smarty_tpl) {?>标题：<?php echo $_smarty_tpl->tpl_vars['row']->value[0];?>
<br/>
薪资：<?php echo Smarty_Internal_Nocache_Insert::compile ('insert_hit',array(), $_smarty_tpl, 'null');?>
<?php }} ?>