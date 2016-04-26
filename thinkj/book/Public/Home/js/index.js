/**
*美文大全列表 为访问过的标签添加一个visited-a类名
*/
!function(){
	$('.j-parts a').on('click',bArticl);
	function bArticl(){
		$(this).addClass('visited-a');
	}
}();

/**
*允许显示字符串长度，超出部分显示省略号
*/
!function(){
	var targ = $('[name~="data-maxlength"]');
	for (var i = 0; i < targ.length; i++) {
		var tex = $(targ[i]).text();
		var len = parseInt($(targ[i]).attr('name').replace('data-maxlength ',''));
		if(tex.length > len){
			$(targ[i]).text(tex.substring(0,len)+" ......");
		}
	};
}();

/**
*旋转效果
*/
!function(){
	var timer = 0;
	var oTimer = 0;
	var deg = 0;
	var targ = $('[name="more-animate"]');
	for (var i = 0; i < targ.length; i++) {
		$(targ[i]).on('mouseover',aMouseOver).on('mouseout',aMouseOut);
	};
	function aMouseOver(){
		var tt = $(this);
		if(timer == 0 && oTimer == 0){
			timer = setInterval(function(){
				if(deg >= 180){
					window.clearInterval(timer);
					timer = 0;
				}
				else{
					deg += 10;
					if (deg >= 90) 
						tt.text("...");
					tt.css({'transform':'rotateY('+deg+'deg)','-webkit-transform':'rotateY('+deg+'deg)','-moz-transform':'rotateY('+deg+'deg)','opcity':'0.7'});
				}
			},50);
		}
	}
	function aMouseOut(){
		if(oTimer == 0){
			var ott = $(this);
			var otext = ott.attr("values");
			oTimer = setInterval(function(){
				if(timer == 0){
					window.clearInterval(oTimer);
					timer = setInterval(function(){
						if(deg <= 0){
							window.clearInterval(timer);
							timer = 0;
							oTimer = 0;
						}
						else{
							deg -= 10;
							if (deg <= 90) 
								ott.text(otext);
							ott.css({'transform':'rotateY('+deg+'deg)','-webkit-transform':'rotateY('+deg+'deg)','-moz-transform':'rotateY('+deg+'deg)'});
						}
					},50);
				}
			},50);
		}
	}
}();