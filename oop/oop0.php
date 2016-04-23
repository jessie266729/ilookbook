<?php
	/**
	* 2016-3-16 面向对象学习
	*/
	header('Content-Type:text/html;charset=utf-8');
	class MyPc
	{
		public $type;
		public $name;
		// 构造函数
		function __construct($name="",$type=""){
			$this->type = $type;
			$this->name = $name;
		}
		function vod()
		{
			echo "php100视频教程<br/>";
		}
		function fun(){
			return $this->name.$this->type.",播放电影";
		}
		function game(){
			return $this->name.$this->type.",玩游戏";
		}
		function internet(){
			return "上网";
		}
		// 垃圾回收机制，先进后出
		function __destruct(){
			echo "<br/>====".$this->name."<br/>";
		}
	}
	$pc0 = new MyPc();
	$pc0->key="php";
	$pc0->vod();

	$pc1 = new MyPc("家用电脑","台式机");
	$pc2 = new MyPc("公司电脑","笔记本");

	echo $pc1->fun()."<br/>";
	$pc1=null;
	echo $pc2->game()."<br/>";
?>