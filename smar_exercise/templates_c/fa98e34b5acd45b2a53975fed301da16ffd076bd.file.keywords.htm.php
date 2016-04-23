<?php /* Smarty version Smarty 3.1.0, created on 2016-03-17 10:13:01
         compiled from "./templates\keywords.htm" */ ?>
<?php /*%%SmartyHeaderCode:473856ea67a53661d5-99903533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa98e34b5acd45b2a53975fed301da16ffd076bd' => 
    array (
      0 => './templates\\keywords.htm',
      1 => 1458205977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '473856ea67a53661d5-99903533',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_56ea67a53856c',
  'variables' => 
  array (
    'name' => 0,
    'name1' => 0,
    'num' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ea67a53856c')) {function content_56ea67a53856c($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'D:\wamp\www\smar_exercise\smarty\plugins\modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\wamp\www\smar_exercise\smarty\plugins\modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) include 'D:\wamp\www\smar_exercise\smarty\plugins\modifier.replace.php';
if (!is_callable('smarty_modifier_spacify')) include 'D:\wamp\www\smar_exercise\smarty\plugins\modifier.spacify.php';
if (!is_callable('smarty_modifier_truncate')) include 'D:\wamp\www\smar_exercise\smarty\plugins\modifier.truncate.php';
if (!is_callable('smarty_mb_wordwrap')) include 'D:\wamp\www\smar_exercise\smarty\plugins\shared.mb_wordwrap.php';
?><?php echo $_smarty_tpl->tpl_vars['name']->value;?>

<br/>
<!-- <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name']->value);?>
 -->
<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d');?>

<br/>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['name1']->value)===null||$tmp==='' ? "没有内容" : $tmp);?>

<br/>
<?php echo rawurlencode($_smarty_tpl->tpl_vars['name']->value);?>

<br/>
<?php echo preg_replace('!^!m',str_repeat("&nbsp;",10),$_smarty_tpl->tpl_vars['name']->value);?>

<br/>
<?php echo mb_strtolower($_smarty_tpl->tpl_vars['name']->value,SMARTY_RESOURCE_CHAR_SET);?>

<br/>
<?php echo ($_smarty_tpl->tpl_vars['name']->value).("测试添加");?>

<br/>
<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['name']->value,"is","**");?>

<br/>
<?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['name']->value, $tmp);?>

<br/>
<?php echo (preg_match_all('#[\r\n]+#', $_smarty_tpl->tpl_vars['name']->value, $tmp)+1);?>

<br/>
<?php echo preg_match_all("#\w[\.\?\!](\W|$)#uS", $_smarty_tpl->tpl_vars['name']->value, $tmp);?>

<br/>
<?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['name']->value, $tmp);?>

<br/>
<?php echo smarty_modifier_spacify($_smarty_tpl->tpl_vars['name']->value);?>

<br/>
<?php echo smarty_modifier_spacify($_smarty_tpl->tpl_vars['name']->value,"_");?>

<br/>
<?php echo sprintf("%.1f",$_smarty_tpl->tpl_vars['num']->value);?>

<br/>
<?php echo sprintf("%d",$_smarty_tpl->tpl_vars['num']->value);?>

<br/>
<?php echo preg_replace('!\s+!u', '',$_smarty_tpl->tpl_vars['name']->value);?>

<br/>
<?php echo preg_replace('!\s+!u', "*",$_smarty_tpl->tpl_vars['name']->value);?>

<br/>
<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['name']->value);?>

<br/>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['name']->value,20,"..");?>

<br/>
<?php echo smarty_mb_wordwrap($_smarty_tpl->tpl_vars['name']->value,10,"<br/>",false);?>

<?php }} ?>