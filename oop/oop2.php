<?php
	/**
	* 面向对象的继承
	*/
	header('Content-Type:text/html;charset=utf-8');
	class Root{
		function print0(){
			return "Root print.<br/>";
		}
	}
	class Son0 extends Root
	{
		
		function print1()
		{
			return $this->print0()."Son print.<br/>";
		}
	}
	class Son1 extends Root
	{
		
		function print0()
		{
			return Root::print0()."Son print.<br/>";
		}
	}
	$pr = new Son0();
	echo $pr->print1();
	$pr1 = new Son1();
	echo $pr1->print0();
?>