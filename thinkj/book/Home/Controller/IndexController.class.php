<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$p_sql = "select * from c_poem order by id  limit 0,40";
    	$poems = D()->query($p_sql);

    	$i_sql = "select * from c_idiom order by id limit 0,80";
    	$idiom = D()->query($i_sql);

        $a_sql = "select * from c_article order by id limit 0,3";
        $artic = D()->query($a_sql);


    	$this->assign("poems",$poems);
    	$this->assign("idiom",$idiom);
        $this->assign("artic",$artic);
        $this->display();
    }
    public function getName(){
    	return "I am ThinkPHP";
    }
}