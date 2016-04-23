<?php /* Smarty version Smarty 3.1.0, created on 2016-03-18 02:45:33
         compiled from "./templates\all.htm" */ ?>
<?php /*%%SmartyHeaderCode:1009556eb5dbd8a5ad8-49947794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '114887bbaa65d77c388a387b1e5725259a7dca5e' => 
    array (
      0 => './templates\\all.htm',
      1 => 1458265528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1009556eb5dbd8a5ad8-49947794',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_56eb5dbd8f4b2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56eb5dbd8f4b2')) {function content_56eb5dbd8f4b2($_smarty_tpl) {?>标题：<?php echo $_smarty_tpl->tpl_vars['row']->value[0];?>
<br/>
薪资：<?php echo $_smarty_tpl->tpl_vars['row']->value[2];?>
<?php }} ?>