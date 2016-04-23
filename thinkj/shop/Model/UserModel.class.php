<?php
// Goods商品和数据模型model
namespace Model;
use Think\Model;
// 父类Model Think/Library/Think/Model.class.php
class UserModel extends Model{
	protected $patchValidate = ture;
	// 实现表单验证  通过重写父类属性_validate实现表单验证
	protected $_validate = array(
		// 验证用户名 调用create方法才能触发验证执行
		array("username","require","用户名必须填写"),
		array("password","require","密码必须填写"),
		array("password2","require","确认密码必须填写"),
		array("password2","password","与原密码需一致",0,"confirm"),
		array("user_email","email","邮箱格式不正确"),
		array("user_qq","/^[1-9]\d{4,9}$/","qq格式不正确"),
		array("user_xueli","2,3,4,5","请选择学历",0,"in"),
		array("user_hobby","check_hobby","爱好必须两项以上",1,"callback"),
		);
	// 自定义方法验证爱好
	function check_hobby($name){
		if(count($name) < 2){
			return false;
		}else{
			return true;
		}
	}
}
?>