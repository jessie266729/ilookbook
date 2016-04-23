<?php
namespace Component;
use Think\Controller;
// 普通控制器父类
class AdminController extends Controller{
	// 构造方法
	function __construct(){
		//执行父类系统方法，否则会报错
		// 原有构造方法默认执行
		parent::__construct();

		// 当前请求操作
		$now_ac = CONTROLLER_NAME."-".ACTION_NAME;

		// 过滤控制器和方法，避免用户非法请求
		// 通过角色获得用户可以访问的控制器和方法信息
		$sql = "select role_auth_ac from sw_manager as a join
		 sw_role as b on a.mg_role_id=b.role_id where 
		 a.mg_id=".$_SESSION['mg_id'];
		 $auth_ac = D()->query($sql);
		 
		 // 判断当前请求是否在$auth_ac中存在
		 $auth_ac = $auth_ac[0]['role_auth_ac'];
		 // echo (strpos($auth_ac,"hjkh"));
		 if(strpos($auth_ac,$now_ac) === false && $_SESSION['mg_username'] != 'admin'){
		 	$this->success('没有权限',U("Index/right"));
		 }
	}
	// 
}
?>