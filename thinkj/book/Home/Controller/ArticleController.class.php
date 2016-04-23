<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller{
	function story($file_name){
		$xml = simplexml_load_file("http://localhost/thinkj/book/Public/Article/".$file_name); //创建 SimpleXML对象 
		$title = $xml->title;
		$content = $xml->p;
		$this->assign("title",$title);
		$this->assign("content",$content);
		$this->display();
	}
}
?>