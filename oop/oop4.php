<?php
	header('Content-Type:text/html;charset=utf-8');
	/**
	* final self static const =====final不能被继承不能被重载
	*/
	class MyPc{
		const TEST="我是常量";
		static $name="我的电脑";
		static function power(){
			echo self::$name.",电脑开中......<br/>";
			echo self::TEST.",这是常量的输出。";
		}
	}
	class My extends MyPc
	{
		
		// function power(){
		// 	echo MyPc::power()."******";
		// }
	}
	echo MyPc::$name="你的电脑";
	MyPc::power();
	// $p = new My();
	// $p->power();
?>