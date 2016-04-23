<?php
	header('Content-Type:text/html;charset=utf-8');
	/**
	* interface implements
	*/
	interface Demo0{
		const NAME = "名字";
		function fun0();
		function fun1();
	}
	interface Demo1{
		function fun2();
		function fun3();
	}
	interface Demo2{
		const PLAY="游戏";
		function fun4();
	}
	class Person implements Demo0
	{
		
		function fun0(){
			echo Demo::NAME.",我是实现接口中的函数1<br/>";
		}
		function fun1(){
			echo "我是实现接口中的函数2<br/>";
		}
	}
	class PersonG implements Demo0,Demo1{
		function fun0(){

		}
		function fun1(){

		}
		function fun2(){
			echo "我是Demo1中的函数1<br/>";
		}
		function fun3(){
			echo "我是Demo1中的函数2<br/>";
		}
	}
	$p = new Person();
	$p->fun1();
	echo Person::NAME."<br/>";
	$p1 = new PersonG();
	$p1->fun3();
	// 单继承多接口,先继承后应用
	class SomeOne extends PersonG implements Demo2{
		function fun4(){
			echo "这是Demo2哦<br/>";
		}
	}
	$pp = new SomeOne();
	$pp->fun4();
	$pp->fun2();
	echo SomeOne::PLAY."<br/>";
	echo SomeOne::NAME."<br/>";

?>