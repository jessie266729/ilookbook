<?php
namespace Admin\Controller;
use Component\AdminController;
class RoleController extends AdminController{
	// 显示角色列表
	function showlist(){
		$info = D()->table('sw_role')->select();
		// $info = D('sw_role')->select();
		$this->assign("info",$info);
		$this->display();
	}

	function add(){
		if(!empty($_POST)){
			$role = D("Role");
			$role->create();
			$z = $role->add();
			if($z){
				$this->success('角色添加成功！',U('showlist'));
			}else{
				$this->success('角色添加失败！',U('showlist'));
			}
		}else{
			$this->display();
		}
	}

	// 进行权限分配
	function distribute($role_id){
		if(!empty($_POST)){
			// 利用RoleModel模型里面的一个专门方法实现分配权限
			$role = new \Model\RoleModel();
			$z = $role->saveAuth($_POST['authname'],$role_id);
			if($z){
				$this->success('分配权限成功！',U('showlist'));
			}else{
				$this->success('分配权限失败！',U('showlist'));
			}
		}else{
			// 根据$role_id查询对应的角色名字
			$rinfo = D("Role")->getByRole_id($role_id);
			$this->assign("role_name",$rinfo['role_name']);

			// 把当前角色对应的权限信息查询处理
			$authinfo = D("Role")->getByRole_id($role_id);
			$auth_ids_arr = explode(',',$authinfo['role_auth_ids']);

			// 查询全部的权限
			$pauth_info = D('Auth')->where('auth_level=0')->select();//父级权限
			$sauth_info = D('Auth')->where('auth_level=1')->select();
			$tauth_info = D('Auth')->where('auth_level=2')->select();

			$this->assign("auth_ids_arr",$auth_ids_arr);
			$this->assign("pauth_info",$pauth_info);
			$this->assign("sauth_info",$sauth_info);
			$this->assign("tauth_info",$tauth_info);
			$this->display();
		}
	}
}
?>