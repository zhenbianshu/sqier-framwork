<?php
namespace Sqier;
class BaseSqier {


    /*
     * 创建URL方法
     */
    public static function createUrl($info = '') {
        $url_info = explode('/', strtolower($info));
        $controller = isset($url_info[1]) ? $url_info[0] : strtolower(CONTROLLER);
        $action = isset($url_info[1]) ? $url_info[1] : $url_info[0];
        switch(URL_MODE){
            case URL_COMMON:
                return "/index.php?r=" . $controller . '/' . $action;
            case URL_REWRITE:
                return '/' .$controller . '/' . $action;
        }
    }
}