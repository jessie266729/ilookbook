<?php
// 后台管理员控制器
namespace Admin\Controller;
use Think\Controller;
class ManagerController extends Controller{
	function login(){
		if(!empty($_POST)){
			// 驗證碼校驗
			$verify = new \Think\Verify();
			if(!$verify->check($_POST['captcha'])){
				echo "驗證碼錯誤";
			}else{
				// 判斷用戶名和密碼，在model模型里面制作一个专门方法进行验证
				$user = new \Model\ManagerModel();
				$rst = $user->checkNamePwd($_POST["mg_username"],$_POST["mg_password"]);
				if($rst === false){
					echo "用户名或密码错误";
				}else{
					session("mg_username",$rst['mg_name']);
					session("mg_id",$rst['mg_id']);
					// session(name,value,有效时间);设置session
					// session(name);获得name
					// session(name,null);清除name
					// session(null)清除所有session
					// 页面跳转到后台首页redirect()
					// $this->redirect("Index/index","",2,"用户马上登陆到后台");
					$this->redirect("Index/index");//第一个参数跳转的地址，第二个是传入的参数，第三个是停顿时间，第四个是提示信息
				}
			}
		}
			// 獲得語言變量信息
			// L() 獲得全部語言
			// L('USERNAME') 獲得指定語言
			$this->assign('lang',L());
			// display()没有参数，获得到的模板与当前操作名称一致
			// display("hello") Admin/View/Manager/hello.html
			$this->display();
	}
	// 退出系统
	function logout(){
		session(null);
		$this->redirect("Manager/login");
	}
	// 製作一個專門的方法實現驗證碼生成
	function verifyImg(){
		$config = array(
			'imageH'    =>  24,
			'imageW'    =>  105,
			'fontSize'  =>  14,
			'fontttf'   =>  '4.ttf',
			'length'    =>  4,
			);
		$verify = new \Think\Verify($config);
		$verify->entry();
	}

	function showlist(){
		$info = D('Manager')->select();
		$rinfo = $this->getRoleinfo();
		$this->assign('rinfo',$rinfo);
		$this->assign('info',$info);
		$this->display();
	}

	function upd($mg_id){
		if(!empty($_POST)){
			$manager = D('Manager');
			$manager->create();
			$z = $manager->save();
			if($z){
				$this->success('修改成功！',U('showlist'));
			}else{
				$this->success('修改失败！',U('showlist'));
			}
		}
		// 获得被修改的管理员的信息
		$info = D('Manager')->find($mg_id);
		$rinfo = $this->getRoleinfo();
		$this->assign('rinfo',$rinfo);
		$this->assign('info',$info);
		$this->display();
	}

	function add(){
		
		$this->display();
	}

	function getRoleinfo(){
		// 查询全部的角色信息
		$rinfo = D("Role")->select();
		$info_r = array();
		foreach ($rinfo as $k => $v) {
			$info_r[$v['role_id']] = $v['role_name'];
		}
		return $info_r;
	}
}
?>