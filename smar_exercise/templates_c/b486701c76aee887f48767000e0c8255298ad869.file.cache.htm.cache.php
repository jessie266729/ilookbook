<?php /* Smarty version Smarty 3.1.0, created on 2016-03-17 14:38:32
         compiled from "./templates\cache.htm" */ ?>
<?php /*%%SmartyHeaderCode:1586756eaab1c171629-28291701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b486701c76aee887f48767000e0c8255298ad869' => 
    array (
      0 => './templates\\cache.htm',
      1 => 1458221906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1586756eaab1c171629-28291701',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_56eaab1c1d9d8',
  'variables' => 
  array (
    'name' => 0,
    'a' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56eaab1c1d9d8')) {function content_56eaab1c1d9d8($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['name']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
$_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_loop = true;
?>
<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
<br/>
<?php } ?>
<?php echo $_smarty_tpl->tpl_vars['id']->value;?>

<br/>
<?php echo Smarty_Internal_Nocache_Insert::compile ('insert_shijian',array(), $_smarty_tpl, 'null');?>
<?php }} ?>