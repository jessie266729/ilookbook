<?php
header('Content-Type:text/html;charset=utf-8');
include("conn.php");
include("head.php");
$pagesize = 5;
// 获得url中的path
$url = $_SERVER['REQUEST_URI'];
$url = parse_url($url);
$url = $url[path];

// 查询数据库里面数据数量
$numq = mysql_query("select * from message");
$num = mysql_num_rows($numq);

if($_GET[page]){
	$pageval = $_GET[page];
	$page = ($pageval - 1) * $pagesize;
	$page.=',';
}

if($num > $pagesize){
	if($pageval <= 1) $pageval = 1;
	echo "共 $num 条"."<a href=$url?page=".($pageval-1).">上一页</a><a href=$url?page=".($pageval+1).">下一页</a>";
}

echo $SQL0 = "select * from message limit $page $pagesize";
$query0 = mysql_query($SQL0);
while ($row0 = mysql_fetch_array($query0)) {
	echo "<hr><b>".$row0["user"]."|".$row0["title"];
}
?>

<table width=500 border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#add3ef">
<?php
$sql="select * from message order by id desc";
$query = mysql_query($sql);
while ($row = mysql_fetch_array($query)) {
?>
  <tr bgcolor="#eff3ff">
  <td>标题：<?=$row["title"]?>  用户：<?=$row["user"]?></td>
  </tr>
  <tr bgColor="#ffffff">
  <td>内容：<?php
  echo htmtocode($row["content"]);
  ?></td>
  </tr>
<?php
}
?>
</table>