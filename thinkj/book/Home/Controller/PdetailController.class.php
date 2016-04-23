<?php
namespace Home\Controller;
use Think\Controller;
class PdetailController extends Controller{
	function pdetail_show($p_id){
		$detail = D("Pdetail")->where("p_id=$p_id")->select();
		$author = D("Author")->find($detail["p_author_id"]);
		$this->assign("detail",$detail);
		$this->assign("author",$author);
		$this->display();
	}
	function pauthor_show(){
		
	}
}
?>