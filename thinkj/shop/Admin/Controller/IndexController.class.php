<?php
namespace Admin\Controller;
use Component\AdminController;
class IndexController extends AdminController{
	// 首页frameset html框架集成方法
	function index(){
		// 获得当前系统和自定义都给我们提供了什么常量使用
		// var_dump(get_defined_constants());//true可以把获得的数据自动分组显示

		$this->display();
	}
	// 展现后台头部页面
	function head(){
		$this->display();
	}
	// 左边页面
	function left(){
		// echo $_SESSION['mg_id'];
		// 根据session用户id信息查询角色id信息
		$sql = "select * from sw_manager where mg_id=".$_SESSION['mg_id'];
		$minfo = D()->query($sql);
		$role_id = $minfo[0]['mg_role_id'];

		$sql1 = "select * from sw_role where role_id=".$role_id;
		$rinfo = D()->query($sql1);

		$auth_ids = $rinfo[0]['role_auth_ids'];
		$sql2 = "select * from sw_auth where auth_level=0 and auth_id in ($auth_ids)";
		$p_info = D()->query($sql2);

		$sql3 = "select * from sw_auth where auth_level=1 and auth_id in ($auth_ids)";
		$s_info = D()->query($sql3);
		$this->assign("pauth_info",$p_info);
		$this->assign("sauth_info",$s_info);
		$this->display();
	}
	// 右边页面
	function right(){
		$this->display();
	}
}
?>