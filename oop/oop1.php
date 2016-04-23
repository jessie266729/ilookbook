<?php
	/**
	* 面向对象的封装
	*/
	header('Content-Type:text/html;charset=utf-8');
	class MyPc
	{
		private $name;
		// get和set起到原始数据保存的作用下 对新数据进行操作
		function __set($name,$value){
			if($value == '555'){
				$this->name = $value;	
			}
		}
		function __get($name){
			return $this->name;
		}
		function __construct($name="")
		{
			$this->name = $name;
		}
		function power(){
			return "打开电源，正在开机……";
		}
	}
	$pc1 = new MyPc("我的电脑");
	$pc1->name="你的电脑";
	echo $pc1->name;
?>