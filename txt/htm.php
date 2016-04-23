<?php
header('Content-Type:text/html;charset=utf-8');
$row = array(array("新闻标题","新闻内容"),array("新闻标题2","新闻内容2"));
foreach ($row as $id => $val) {
	$title = $val[0];
	$content = $val[1];
	$path = $id.".html";
	$fp = fopen("htm.htm", "r");
	$str = fread($fp, filesize("htm.htm"));
	$str = str_replace("{title}", $title, $str);
	$str = str_replace("{content}", $content, $str);
	fclose($fp);

	$handle = fopen($path, "w");
	fwrite($handle, $str);
	fclose($handle);
	echo "生成成功";
}

// 删除文件
// unlink("0.html");
// echo "./";
mkdir("./txt/");

// $fp = fopen("htm.htm", "r");//只读打开模板
// $str = fread($fp, filesize("htm.htm"));//读取模板中的内容
// $str = str_replace("{title}", '新标题', $str); //替换str中的title
// $str = str_replace("{content}", "新内容", $str);//替换str中的content
// fclose($fp);
// $handle = fopen("news.html", "w");//写入方式打开新闻路径
// fwrite($handle, $str);//把替换的内容写进生成的HTML文件
// fclose($handle);
// echo "生成成功";
?>