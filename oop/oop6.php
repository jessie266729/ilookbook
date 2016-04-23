<?php
	header('Content-Type:text/html;charset=utf-8');
	/**
	* 多态 interface implements instanceof
	*/
	class A{}
	class B{}
	$thing = new B();
	if($thing instanceof A){
		echo "A";
	}
	if($thing instanceof B){
		echo "B";
	}

	interface myusb{
		function type();
		function alert();
	}
	class zip implements myusb{
		function type(){
			echo "2.0";
		}
		function alert(){
			echo "正在检查U盘驱动......";
		}
	}
	class mp3 implements myusb{
		function type(){
			echo "1.0";
		}
		function alert(){
			echo "正在检查MP3驱动......";
		}
	}
	class mypc{
		function pc_usb($what){
			$what->type();
			$what->alert();
		}
	}
	$p = new mypc();
	$zip = new zip();
	$mp3 = new mp3();
	$p->pc_usb($zip);
	$p->pc_usb($mp3);
?>