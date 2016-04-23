<?php
	header('Content-Type:text/html;charset=utf-8');
	include("fckeditor.php");
	$sBasePath = $_SERVER["PHP_SELF"];
	$sBasePath = dirname($sBasePath)."/";

	$ed = new FCKeditor("con");//实例化

	$ed->BasePath = $sBasePath;//设置路径
	$ed->ToolbarSet = "Basic";//简化编辑框的菜单栏
	if($_POST[submit]){
		echo "标题：".$_POST[title];
		echo "FCK内容：".$_POST[con];
	}
?>

<form action="" method="post">
	<input type="text" name="title" value=""/>
	<?php 
		$ed->Value = "初始值<br/>这是php100视频教程的演示。";
		$ed->Create();
	?>
	<input type="submit" name="submit" value="添加新闻">
</form>