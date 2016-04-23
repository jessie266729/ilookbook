<?php
header("Content-Type:text/html;charset=utf8");
// 定义css,images,js常量
define("SITE_URL", "http://localhost/thinkj/");
define("CSS_URL", SITE_URL."shop/public/Home/css/");
define("IMG_URL", SITE_URL."shop/public/Home/images/");
define("JS_URL", SITE_URL."shop/public/Home/js/");

// 为后台资源引入路径创建常量
define("ADMIN_CSS_URL", SITE_URL."shop/public/Admin/css/");
define("ADMIN_IMG_URL", SITE_URL."shop/public/Admin/img/");
define("ADMIN_JS_URL", SITE_URL."shop/public/Admin/js/");

// 上传图片设置路径
define("IMG_UPLOAD", SITE_URL."shop/public/");

// 把目前tp模式由生产模式变为开发模式
define("APP_DEBUG",true);

include("../ThinkPHP/ThinkPHP.php");
?>