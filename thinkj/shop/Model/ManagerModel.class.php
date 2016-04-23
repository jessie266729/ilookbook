<?php
namespace Model;
use Think\Model;
class ManagerModel extends Model{
	// 制作一个方法对用户名和密码进行校验
	function checkNamePwd($name,$pwd){
		// 根据$name查询是否有此记录
		// select * from sw_mamager where mg_name=$name
		// select() find()
		// 根据指定字段进行查询getByXXX()  getByMg_name($name)
		// getBymg_pwd();父类Model利用__call()封装的方法
		$info = $this->getByMg_name($name);
		// $info = null 说明用户名错误
		// $info = 一维数组 用户名正确
		if($info != null){
			// 验证密码
			if($info["mg_pwd"] != $pwd){
				return false;
			}else{
				return $info;
			}
		}else{
			return false;
		}
	}
}
?>