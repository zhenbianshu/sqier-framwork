<?php
/*
 * @func 解析一个数组变量,将其各键值定义为常量
 */
if (!function_exists('compile_conf')) {
    function compileConf($conf) {
        foreach ($conf as $key => $val) {
            if(is_array($val)){
                compileConf($val);
            }else{
                define($key, $val);
            }
        }
    }
}
