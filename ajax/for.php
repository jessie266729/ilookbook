<?php
header("Content-Type:text/html;charset=utf-8");
if($id=$_GET[id]){
	for ($i=0; $i < 3; $i++) { 
		echo $id;
		// sleep(1);
	}
	exit();
}

?>