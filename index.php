<?php

header("content-type:text/html;charset=utf8");


// 应用目录为当前目录

define('APP_PATH', str_replace('\\', '/', __DIR__). '/');

// 开启调试模式
define('APP_DEBUG', true);


define('APP_HOST', 'http://www.mvc.com/');


define('APP_PUBLIC',APP_HOST.'public/');

// 加载框架文件
require(APP_PATH . 'fastphp/Fastphp.php');

// 加载配置文件
$config = require(APP_PATH . 'config/config.php');

// 实例化框架类
(new Fastphp($config))->run();
