<?php
class action extends mysql{
	public function get_show_msg($url,$show="操作已成功！"){
		$msg = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
		"http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8/>
		<link rel="stylesheet" href="Public/common.css" type="text/css"/>
		<meta http-equiv="refresh" content="2;url='.$url.'"/>
		<title>消息提示</title>
		</head>
		<body>
		<div id="man_zone">
			<table width="30%" border="1" align="center" cellpadding="3" cellspacing="0" class="table" style="margin-top:100px;">
			<tr><th align="center" style="background:#cef">信息提示</th></tr>
			<tr><td><p>'.$show.'<br/>2s后返回指定页面！<br/>如果浏览器无法跳转，
			<a href="'.$url.'">请点击此处</a>.</p></td></tr>
			</table>
		</div>
		</body>
		</html>';
		echo $msg;
		exit();
	}
}
?>