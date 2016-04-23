<?php
	header('Content-Type:text/html;charset=utf-8');
	function __autoload($name){
		include("$name.php");
	}
	$d = new demo();
	$d->fun1();
	$t = new test();
	$t->fun2();
?>