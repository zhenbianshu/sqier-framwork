<?php
//定义系统配置文件路径
define("CONF_PATH", SYS_PATH . 'conf/');
//定义基础类文件路径
define("SQ_PATH", SYS_PATH . 'Sqier/');

//引入公共函数
require_once SYS_PATH.'common/Function.php';

//公共函数解析配置
compileConf(require_once CONF_PATH.'config.php');

//定义URL类型
define('URL_MODE',URL_COMMON);

//引入自动加载类,并注册自动加载函数
require_once SQ_PATH.'Loader.php';
spl_autoload_register('Sqier\Loader::autoLoad');


/*set_error_handler();
set_exception_handler();
register_shutdown_function();*/

require_once SQ_PATH.'Router.php';

Sqier\Router::bootstrap();
