<?php
header('Content-Type:text/html;charset=utf-8');
$url = "http://www.weather.com.cn/weather/101270101.shtml";
$fp = @fopen($url, "r") or die("超时");
$fcontents = file_get_contents($url);
preg_match("#<title>(.*)</title>#", $fcontents, $rg);
print_r($rg);
?>