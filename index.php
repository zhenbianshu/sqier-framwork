<?php

//检验PHP环境,低于5.4则提示退出
if(version_compare(PHP_VERSION,'5.4.0','<'))  die('快来试试PHP5.4以上版本的新特性吧~');

//首先定义框架环境,默认为开发环境
define("SQ_DEV", true);
if (SQ_DEV) {
    ini_set('display_errors', 1);
    error_reporting(-1);
} else {
    ini_set('display_errors', 0);
}

//定义基本路径
$base_path = rtrim(str_replace('\\', '/', __DIR__), '/') . '/';
//定义系统核心路径
define("SYS_PATH", $base_path . 'sys/');
//定义应用路径
define("APP_PATH", $base_path . 'app/');
//定义系统配置文件路径
define("CONF_PATH", SYS_PATH . 'conf/');
//定义基础类文件路径
define("SQ_PATH", SYS_PATH . 'Sqier/');


require SQ_PATH . 'Sqier.php';