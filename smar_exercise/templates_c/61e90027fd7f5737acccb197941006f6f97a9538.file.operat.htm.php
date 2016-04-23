<?php /* Smarty version Smarty 3.1.0, created on 2016-03-17 11:08:15
         compiled from "./templates\operat.htm" */ ?>
<?php /*%%SmartyHeaderCode:640956ea7aca201169-71815552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61e90027fd7f5737acccb197941006f6f97a9538' => 
    array (
      0 => './templates\\operat.htm',
      1 => 1458209293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '640956ea7aca201169-71815552',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_56ea7aca239eb',
  'variables' => 
  array (
    'val' => 0,
    'id' => 0,
    'test' => 0,
    'k' => 0,
    'vall' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ea7aca239eb')) {function content_56ea7aca239eb($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['val']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
$_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->key => $_smarty_tpl->tpl_vars['id']->value){
$_loop = true;
?>
数组内容：<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<br/>
<?php } ?>
<?php  $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['test']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
$_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->key => $_smarty_tpl->tpl_vars['id']->value){
$_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['id']->key;
?>
数组内容：<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<br/>
<?php } ?>
<?php echo $_smarty_tpl->getSubTemplate ("head.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"这是个首页"), 0);?>

<?php if ($_smarty_tpl->tpl_vars['vall']->value==''){?>
什么都没有
<?php }else{ ?>
里面有东西的
<?php }?>

<script language="javascript">
	function isblank(field){
		if(field == ""){
			alert("test");
		}else{
			alert("test");
		}
	}
	alert("still test");
</script>

<table><tr><td><a href=""><font color="red">This is a test</font></a></td></tr></table>
<table>
	<tr>
		<td>
			<a href=""><font color="blue">This is a test</font></a>
		</td>
	</tr>
</table><?php }} ?>