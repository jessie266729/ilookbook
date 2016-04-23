<?php
return array(
	// 一下内容会把ThinkPHP/Conf/Mode/common.php的指定配置给覆盖
	'app_begin'     =>  array(
            'Behavior\ReadHtmlCacheBehavior', // 读取静态缓存
        	'Behavior\CheckLangBehavior',
        ),
	);
?>