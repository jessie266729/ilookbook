<?php
	header('Content-Type:text/html;charset=utf-8');
	/*
	capitalize[首字母大写]
	count_characters[计算字符数]
	cat[连接字符串]
	count_paragraphs[计算段落数]
	count_sentences[计算句数]
	count_words[计算词数]
	date_format[时间格式]
	default[默认]
	escape[转码] html htmlall url
	indent[缩进]
	lower[小写]
	replace[替换]
	regex_replace[正则替换]
	spacify[插空]
	string_format[字符串格式化]数字 %0.2f
	strip[去除（多余空格）]
	strip_tags[去除html标签]
	truncate[截取]
	upper[大写]
	wordwrap[行宽约束]
	*/
	include("smarty_inc.php");
	$value = "it is Word and ,It is php100 video.<a href='www.baidu.com'>aaa</a>";
	$smarty->assign("name",$value);
	$smarty->assign("num",123456.789123);
	$smarty->assign("time",strtotime("-0"));
	$smarty->display("keywords.htm");
?>