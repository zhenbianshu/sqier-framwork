<?php
namespace Sqier;
//引入公共函数
require_once SYS_PATH.'common/Function.php';

//公共函数解析配置
compileConf(require_once CONF_PATH.'config.php');

//定义URL类型
define('URL_MODE',URL_COMMON);

require_once SQ_PATH.'BaseSqier.php';
class SQ extends BaseSqier{

}

//引入自动加载类,并注册自动加载函数
require_once SQ_PATH.'Loader.php';
spl_autoload_register('Sqier\Loader::autoLoad');



/*set_error_handler();
set_exception_handler();
register_shutdown_function();*/

Router::bootstrap();