<?php
namespace Sqier;

class Loader {
    public static function autoLoad($class) {
        /*
         * 首先试探处理在app下或sys/Sqier下的类
         */
        //如果有的话,去除类最左侧的\
        $class = ltrim($class, '\\');
        //获取类的路径全名
        $class_path = str_replace('\\', '/', $class) . EXT;
        if (file_exists(SYS_PATH . $class_path)) {
            include SYS_PATH . $class_path;
            return;
        }
        if (file_exists(APP_PATH . $class_path)) {
            include APP_PATH . $class_path;
            return;
        }
        /*
         * 下面是处理无法直接在APP_PATH和SYS_PATH下找到类文件的逻辑
         */
        //获取类的最基本路径
        $class_base_dir = strstr($class, '\\', true);
        if (in_array($class_base_dir, ['vendor'])) {
            $file_path = SYS_PATH . $class_base_dir . '/';
        } else {

        }
    }
}