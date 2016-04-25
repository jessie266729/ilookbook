<?php /* Smarty version Smarty-3.1.6, created on 2016-04-25 16:08:03
         compiled from "D:/wamp/www/thinkj/book/Home/View\Pdetail\pdetail_show.html" */ ?>
<?php /*%%SmartyHeaderCode:676557188b0cac5c39-15273084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3b56f844d478f348bb54959a5e67f1bb99b17bb' => 
    array (
      0 => 'D:/wamp/www/thinkj/book/Home/View\\Pdetail\\pdetail_show.html',
      1 => 1461571675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '676557188b0cac5c39-15273084',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57188b0cb1dc7',
  'variables' => 
  array (
    'detail' => 0,
    'v' => 0,
    'author' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57188b0cb1dc7')) {function content_57188b0cb1dc7($_smarty_tpl) {?><!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8"/>
        <title></title>
        <meta name="Keywords" content=""/>
        <meta name="Description" content=""/>
        <link rel="stylesheet" type="text/css" href="/thinkj/book/Public/Home/css/index.css">
        <link rel="stylesheet" type="text/css" href="/thinkj/book/Public/Home/css/pdetail.css">
    </head>
    <body>
        <div class="j-content p-detail">
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['detail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        	<div class="p-part-head">
        		<h2 class="p-head-title"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</h2>
        		<a class="p-author" href=""><?php echo $_smarty_tpl->tpl_vars['author']->value['a_name'];?>
</a><span class="p-dynasty"><?php echo $_smarty_tpl->tpl_vars['author']->value['a_dynasty'];?>
</span>
                <div class="p-content"><?php echo $_smarty_tpl->tpl_vars['v']->value['p_content'];?>
</div>
        	</div>
        	<div>
        		<h3 class="p-part-title">注释</h3>
        		<p><?php echo $_smarty_tpl->tpl_vars['v']->value['p_note'];?>
</p>
        		<h3 class="p-part-title">译文</h3>
        		<p><?php echo $_smarty_tpl->tpl_vars['v']->value['p_analysis'];?>
</p>
        	</div>
            <?php } ?>
        </div>
    </body>
</html><?php }} ?>