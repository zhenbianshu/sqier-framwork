<?php

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

require SYS_PATH . 'Sqier.php';