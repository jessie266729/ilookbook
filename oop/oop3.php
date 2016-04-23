<?php
	/**
	* 抽象类
	*/
	header('Content-Type:text/html;charset=utf-8');
	abstract class cl1{
		abstract function fun1();
		abstract function fun2();
		abstract function fun3();
		function ok(){

		}
	}
	class cl2 extends cl1
	{
		
		function fun1(){
			echo "第一个抽象函数";
		}
		function fun2(){
			echo "第二个抽象函数";
		}
		function fun3(){
			echo "第三个抽象函数";
		}
	}

	$cl = new cl2();
	$cl->fun2();

?>