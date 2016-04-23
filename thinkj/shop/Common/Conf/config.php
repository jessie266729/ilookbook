<?php
return array(
	//'配置项'=>'配置值'
	// url模式设置
	'URL_MODEL'             => 1,
	// 让页面显示追踪日志信息
	'SHOW_PAGE_TRACE'       => true,
	// 修改模板引擎为smarty
	'TMPL_ENGINE_TYPE'      => 'Smarty',
	// 多语言支持
	'LANG_SWITCH_ON'        => true,  //默认关闭语言包功能
	'LANG_AUTO_DETECT'      => true,   //自动侦测语言 开启多语言功能后有效
	'LANG_LIST'             => 'zh-cn,zh-tw,en-us',//允许切换的语言列表，用逗号分隔
	'VAR_LANGUAGE'          => 'hl',    //默认语言切换变量


	'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'shop',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'sw_',    // 数据库表前缀
);