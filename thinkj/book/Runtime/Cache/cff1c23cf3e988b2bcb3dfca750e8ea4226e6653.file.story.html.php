<?php /* Smarty version Smarty-3.1.6, created on 2016-04-22 16:55:59
         compiled from "D:/wamp/www/thinkj/book/Home/View\Article\story.html" */ ?>
<?php /*%%SmartyHeaderCode:217155719c533928e90-93311524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cff1c23cf3e988b2bcb3dfca750e8ea4226e6653' => 
    array (
      0 => 'D:/wamp/www/thinkj/book/Home/View\\Article\\story.html',
      1 => 1461315357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '217155719c533928e90-93311524',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5719c53395031',
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5719c53395031')) {function content_5719c53395031($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
        <title></title>
        <meta name="Keywords" content=""/>
        <meta name="Description" content=""/>
        <link rel="stylesheet" type="text/css" href="/thinkj/book/Public/Home/css/index.css">
        <link rel="stylesheet" type="text/css" href="/thinkj/book/Public/Home/css/article.css">
	</head>
	<body>
		<div class="j-content">
			<div class="j-parts">
				<h3 class="a-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<p><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</p>
				<?php } ?>
			</div>
		</div>
	</body>
</html><?php }} ?>