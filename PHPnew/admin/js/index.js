/*
*ajax js 2016-3-24
*封装ajax
*xmlHttp:接收XMLHttp
*url:发送数据的路径
*way:发送数据的方式（GET,POST）
*/
+function(){
	var xmlHttp;
	var url;
	var way;
	// 实例化XMLHttp对象
	function XmlHttpRequest(way,url){
		this.url = url;
		this.way = way;
		if(window.ActiveXObject){
			this.xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		}else if(window.XmlHttpRequest){
			this.xmlHttp = new XMLHttpRequest();
		}
	}
	// 处理数据
	XmlHttpRequest.prototype.DealData = function(){
		this.xmlHttp.open(this.way,this.url,true);
		this.xmlHttp.onreadystatechange = state;
		this.xmlHttp.send(null);
		console.log(this.xmlHttp.readyState);
	}
	function state(){
		console.log(this.responseText)
	}
	window.XmlHttpRequest = XmlHttpRequest;
}();
function LoginFun(){
	var username = document.getElementById("user_name").value;
	var pw = document.getElementById("user_pw").value;
	var xml = new XmlHttpRequest("GET","../index.php?username="+username);
	xml.DealData();
}