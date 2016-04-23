<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller{
	function showlist(){
		// 获得User控制器的number方法返回的信息
		// $user = new UserController();
		// $user = A("User");
		// echo $user->number();
		// $goods = A("Admin/Goods");
		// echo $goods->getMoney();
		// 跨项目跨模块调用控制器
		// $index = A("book://Home/Index");
		// echo $index->getName();
		// 简便操作
		// R()参数如A
		$this->display();
		echo (R("User/number"));
		echo (R("Admin/Goods/getMoney"));
		
	}
	function detail(){
		$this->display();
	}
}
?>