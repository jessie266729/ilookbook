<?php
header('Content-Type:text/html;charset=utf-8');
echo "你好！";
echo "<br>";
echo "希望和上面一行是换行输出的效果。<br>";
// 变量
$a = 6;
echo $a += 5;
// 条件语句
if($a == 6){
	echo "正确！";
}
else{
	echo "错误！";
}
switch ($a) {
	case 6:
		echo "我是case6。<br>";
		break;
	
	default:
		echo "我是默认的case。<br>";
		break;
}
// 循环
do{
	echo "我循环了".$a--.'次<br>';

}while($a > 5);
for($i=0;$i<5;$i++){
	echo "我是for循环".$i."<br>";
}
// 数组
$arr = ["id" => 1, "title" => "today"];
echo $arr["id"];
echo "<br>";
echo $arr["title"];
$arr1 = array(1,2,3,4);
echo $arr1[2];

print_r($arr1);
foreach ($arr1 as $key => $value) {
	echo "<br>";
	echo $value."->".$key;
}
// 系统函数
echo "<br>";
$d = date("Y-m-d");
echo $d."<br>";
// 加密函数
$p = md5("php100");
echo $p."<br>";
// 自定义函数
Function func_test($par){
	echo "我是自定义函数，我要输出的参数是：".$par."<br>";
}
func_test(6);
// 选择性接收参数，判断参数是否存在
Function func_test1($par0,$par1 = 2){
	return $par0+$par1;
}
echo func_test1(1);
echo func_test1(1,7);
if(function_exists("func_test1")){
	echo "func_test1 is exist.<br>";
}
// 引用加&
Function func_test2($par0,&$par1){
	$par1 = "我是".$par1.",我的兄弟是".$par0.",请多多关照，谢谢！<br>";
}
$p0 = 1;
$p1 = 2;
func_test2($p0,$p1);
echo $p1;
// 连接数据库@可屏蔽错误
$conn = @mysql_connect("localhost","root","") or die("连接错误");
mysql_query("set names utf8");
mysql_select_db("newdb",$conn);
// $sql = "insert into test (id,uid,regdate,remark) values ('','insert0',now(),'老板')";
// mysql_query($sql,$conn);
$sql1 = "select * from test";
$query = mysql_query($sql1,$conn);
while ($row = mysql_fetch_array($query)) {
	print_r($row);
	echo $row["uid"];
	echo "<br>";
}
?>

<form action="" method="get">
	<input type="text" size=10 name="user"/>
	<input type="text" size=20 name="title"/>
	<textarea name="content"></textarea>
	<input type="submit" name="submit"/>
</form>