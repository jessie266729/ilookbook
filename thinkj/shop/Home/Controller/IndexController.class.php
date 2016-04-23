<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo "study thinkphp";
    }
    public function hello(){
    	echo "你好！";
    }
}