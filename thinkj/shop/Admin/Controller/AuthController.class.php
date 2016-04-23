<?php
namespace Admin\Controller;
use Component\AdminController;
class AuthController extends AdminController{
	function showlist(){
		$info = $this->getInfo();
		$this->assign('info',$info);
		$this->display();
	}

	function add(){
		// 收集表单信息
		if(!empty($_POST)){
			// 在AuthorModel里面指定一个方法实现权限添加
			$auth = new \Model\AuthModel();
			$z = $auth->addAuth($_POST);
			if($z){
				$this->success("添加权限成功！",U("showlist"));
			}else{
				$this->success("添加权限失败！",U("showlist"));
			}
		}else{
			// 获得父级权限信息
			$info = $this->getInfo(true);
			$authinfo = array();
			foreach ($info as $v) {
				$authinfo[$v['auth_id']] = $v['auth_name'];
			}
			$this->assign('authinfo',$authinfo);
			$this->display();
		}
	}

	function getInfo($flag=false){
		// 如果$flag标识为false，查询全部的权限信息
		// 如果$flag标识为真，只查询level等于0或者1的信息
		$auth = D('Auth');
		if($flag == true){
			$info = $auth->where('auth_level<2')->order('auth_path asc')->select();
		}else{
			$info = $auth->order('auth_path asc')->select();

		}
		// $info[X][auth_name] = "->"auth_name
		foreach ($info as $k => $v) {
			$info[$k]['auth_name'] = str_repeat('-->', $v['auth_level']).$info[$k]['auth_name'];
		}
		return $info;
	}
}
?>