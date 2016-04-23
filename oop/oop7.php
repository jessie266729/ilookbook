<?php
	header('Content-Type:text/html;charset=utf-8');
	class my{
		public $name = "我的类";
		// 直接输出对象报错处理
		function __tostring(){
			return $this->name.",这是一个空类";
		}
		// 调用不存在的函数处理
		function __call($n,$v){
			echo "错误的方法为:".$n;
			echo "错误的值:".print_r($v);
		}
		function __destruct(){
			echo "<br/>清理一个对象";
		}
		function __clone(){
			$this->name="你的类";
		}
	}
	$p = new my();
	$p->demo("第一个参数",6);
	echo $p;
	$b = clone $p;
	echo "<br/>".$p->name."<br/>";
	echo $b->name;
?>