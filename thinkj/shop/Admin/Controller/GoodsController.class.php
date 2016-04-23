<?php
// 后台商品控制器
namespace Admin\Controller;
use Component\AdminController;
class GoodsController extends AdminController{
	function showlist1(){
		// 使用数据model模型
		$goods = M("User");
		// $qq = new \Model\QqModel();
		var_dump($goods);
		$this->display();
	}
	function showlist(){
		$goods = M("Goods");
		// 1.获得当前记录总条数
		$total = $goods->count();
		$per = 7;
		// 2.实例化分页对象
		$page = new \Component\Page($total,$per);
		// 3.拼装sql语句获得每页信息
		$sql = "select * from sw_goods ".$page->limit;
		$info = $goods->query($sql);
		// 4.获得页码列表
		$pagelist = $page->fpage();
		$this->assign("pagelist",$pagelist);
		// $info = $goods->select();
		$this->assign("info",$info);

		$this->display();
	}
	function add(){
		// 实现两个表单a:展现数据 b:接收表单数据
		$goods = D("Goods");
		if(!empty($_POST)){
			// $goods->goods_name      = $_POST["goods_name"];
			// $goods->goods_price     = $_POST["goods_price"];
			// $goods->goods_number    = $_POST["goods_number"];
			// $goods->goods_weight    = $_POST["goods_weight"];
			// $goods->goods_introduce = $_POST["goods_introduce"];
			// tp框架实现数据收集 数据模型对象->create

			$config = array(
				'rootPath'      =>  './public/', //保存根路径
				'savePath'      =>  'upload/', //保存路径
				);
			// 判断附件是否有上传
			// 如果有则实例化Upload，把附件上传到服务器指定位置
			// 然后把附件的路径获取到，存入$_POST
			if(!empty($_FILES)){
				$upload = new \Think\Upload($config);
				$z = $upload->uploadOne($_FILES['goods_img']);
				if(!$z){
					print_r($upload->getError());
				}else{
					// 拼装图片的路径名
					$bigimg = $z['savepath'].$z['savename'];
					$_POST['goods_big_img'] = $bigimg;

					// 把已经上传好的图片制作缩略图Image.class.php
					$image = new \Think\Image();
					$srcimg = $upload->rootPath.$bigimg;
					$image->open($srcimg);
					$image->thumb(150,150);//按照比例缩小
					$smallimg = $z['savepath']."small_".$z['savename'];
					$image->save($upload->rootPath.$smallimg);
					$_POST['goods_small_img'] = $smallimg;
				}
			}
			$goods->create();
			$z = $goods->add();
			if($z){
				// 展现一个提示页面，并做一个跳转
				// $this->success("添加商品成功",U("Goods/showlist"));
				echo "success";
			}else{
				// $this->error("添加商品失败",U("Goods/showlist"));
				echo "error";
			}
		}
		// $arr = array(
		// 	"goods_name"=>"iphone5s",
		// 	"goods_price"=>4999,
		// 	"goods_number"=>53,
		// 	);
		// $goods->add($arr);
		// $goods->goods_name = "htc_one";
		// $goods->goods_price = 3000;
		// $goods->add();
		$this->display();
	}
	function upd1(){
		$goods = D("Goods");
		$ar = array(
			"goods_name"=>"黑莓手机",
			"goods_price"=>2300,
			);
		$rst = $goods->where("goods_id>60")->save($ar);
		echo $rst;
		$this->display();
	}
	function upd($goods_id){
		// 查询修改商品的信息，传递给模板
		$goods = D("Goods");
		// 两个逻辑：展示表单、收集表单
		if (!empty($_POST)) {
			$goods->create();
			$rst = $goods->save();
			if($rst){
				echo "success";
			}else{
				echo "error";
			}
		}else{
			$info = $goods->find($goods_id);
			$this->assign("info",$info);
			$this->display();
		}
	}
	function del(){
		$goods = D("Goods");
		// $rst = $goods->delete(63);
		// $rst = $goods->delete("64,65");
		$rst = $goods->where("goods_id > 66")->delete();
		echo $rst;
	}
	function getMoney(){
		return "1000元钱";
	}

	// 设置缓存
	function s1(){
		S("name","tom");
		S("sex","girl");
		S("hobby",array("篮球","排球","足球"));
		echo "success";
	}
	function s2(){
		echo S("name");
		print_r(S("hobby"));
	}
	function s3(){
		echo S("name",null);
		echo "delete";
	}

	function y1(){
		// 供用户访问的方法
		echo ($this->y2());
	}

	function y2(){
		// 被其他方法调用的方法，获得指定信息
		// 第一次从数据库获取数据  之后在有效期内从缓存获得
		$info = S("goods_info");
		if($info){
			return $info;
		}else{
			// 没有缓存信息，就从数据库获得数据，再把数据缓存起来
			// 连接数据库
			$dt = "apple5s".time();
			S("goods_info",$dt,10);
			return $dt;
		}
	}
}
?>