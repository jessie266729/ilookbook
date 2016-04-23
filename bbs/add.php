<?php
header('Content-Type:text/html;charset=utf-8');
include("conn.php");
// echo $_POST["submit"];
if(isset($_POST['submit']) && $_POST['submit']) {
	$sql = "insert into message(id,user,title,content,lastdate) values ('','$_POST[user]','$_POST[title]','$_POST[content]',now())";
	mysql_query($sql);
	echo "发表成功";
}
include("head.php");
?>
<script type="text/javascript">
function CheckPost(){
	if(myform.user.value==""){
		alert("请填写用户名");
		myform.user.focus();
		return false;
	}
	if(myform.title.value.length<5){
		alert("标题不能少于5个字符");
		myform.title.focus();
		return false;
	}
	if(myform.content.value==""){
		alert("请输入留言内容")
		myform.content.focus();
		return false;
	}
}
</script>
<form action="add.php" method="post" name="myform" onsubmit="return CheckPost();">
	用户：<input type="text" size="10" name="user"/><br/>
	标题：<input type="text" name="title"/><br/>
	内容：<textarea name="content" row=9></textarea><br/>
	<input type="submit" name="submit" value="发布留言"/>
</form>