<?php
	header("Content-Type:text/html;charset=utf-8");

	session_start();
	if($_GET[out]){
		unset($_SESSION[id]);
		unset($_SESSION[pass]);
	}
	if($_POST[name] && $_POST[password]){
		$_SESSION[id] = $_POST[name];
		$_SESSION[pass] = $_POST[password];
	}
	if($_SESSION[id] && $_SESSION[pass]){
		echo "登录成功！<br/>用户名：".$_SESSION[id]."<br/>密码：".$_SESSION[pass];
		echo "<br/><a href='login.php?out=out'>退出</a>";
	}


	// if($_GET[out]){
	// 	setcookie("id","");
	// 	setcookie("pass","");
	// 	echo "<script>location.href='login.php'</script>";
	// }
	// if($_POST[name] && $_POST[password]){
	// 	setcookie("id",$_POST[name],time()+3600);
	// 	setcookie("pass",$_POST[password],time()+3600);
	// 	// cookie不会立马生效，需要刷新一次后生效，可以通过页面重新自己刷新解决
	// 	echo "<script>location.href='login.php'</script>";
	// }
	// if($_COOKIE[id] && $_COOKIE[pass]){
	// 	echo "登录成功！<br/>用户名：".$_COOKIE[id]."<br/>密码：".$_COOKIE[pass];
	// 	echo "<br/><a href='login.php?out=out'>退出</a>";
	// }
?>
<form action="" method="post">
用户ID：
<input type="text" name="name"/><br/><br/>
密码：
<input type="password" name="password"/><br/><br/>
<input type="submit" value="登录"/>
</form>