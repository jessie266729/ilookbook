<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller
{
	// 用户登录
	function login(){
		// 调用视图
		$this->display();
	}

	// 用户注册
	function register(){
		$user = new \Model\UserModel();
		if(!empty($_POST)){
			if(!$user->create()){
				// 验证失败
				print_r($user->getError());
				// exit();
			}else{
				// 把爱好由数组变成字符串  使用AR方式改变爱好的值
				// create()方法收集的数据也是吧数据变为模型对象的属性
				$user->user_hobby = implode(",",$_POST["user_hobby"]);
				$rst = $user->add();
				if($rst){
					$this->success("注册成功",U("Index/index"));
				}else{
					$this->success("注册失败",U("Index/index"));
				}
			}
		}else{
			$this->display();	
		}
	}

	// 在对应的控制器里面加空操作处理方法
	function _empty(){
		echo "空操作";
	}
	function number(){
		return "目前网站注册会员200万";
	}
	
}
?>