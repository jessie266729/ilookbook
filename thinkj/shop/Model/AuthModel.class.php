<?php
namespace Model;
use Think\Model;
// 权限模型
class AuthModel extends Model{
	function addAuth($auth){
		// $auth里面存在四个信息  还缺少两个关键信息 auth_path auth_level
		$new_id = $this->add($auth);

		if($auth['auth_pid'] == 0){
			$auth_path = $new_id;
		}else{
			$pinfo = $this->find($auth['auth_pid']);
			$p_path = $pinfo['auth_path'];
			$auth_path = $p_path."-".$new_id;
		}

		$auth_level = count(explode('-', $auth_path)) - 1;

		$dt = array(
			'auth_id'    => $new_id,
			'auth_path'  => $auth_path,
			'auth_level' => $auth_level,
			);
		return $this->save($dt);
	}
}
?>