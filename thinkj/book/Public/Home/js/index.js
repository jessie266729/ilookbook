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