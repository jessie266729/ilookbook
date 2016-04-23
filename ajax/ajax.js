var xmlHttp;
function S_xmlhttprequest () {
 	if(window.ActiveXObject){
 		xmlHttp = new ActiveXObject('Microsoft.XHLHTTP');
 	}else if(window.XMLHttpRequest){
 		xmlHttp = new XMLHttpRequest();
 	}
 }

 function funphp100(url){
 	S_xmlhttprequest();
 	xmlHttp.open("GET","for.php?id="+url,true);//传输方式，文件，是否支持异步传输
 	xmlHttp.onreadystatechange = byphp;
 	xmlHttp.send(null);
 }
 function byphp(){
 	var byphp100 = '';
 	console.log(xmlHttp.readyState)
 	if(xmlHttp.readyState == 0){

 		byphp100 = "未执行！";
 		document.getElementById('php100').innerHTML = byphp100;
 	}
 	else if(xmlHttp.readyState == 4){
 		console.log(xmlHttp.status)
 		byphp100 = xmlHttp.responseText;
 		document.getElementById('php100').innerHTML = byphp100;
 	}
 	 
 	// document.getElementById('php100').innerHTML = byphp100;
 }
