<?php
namespace Sqier;
class Router {
    public static $uri;
    protected static $c_name = DEFAULT_CONTROLLER;
    protected static $a_name = DEFAULT_ACTION;

    /*
     * 路由解析方法选择
     */
    public static function bootstrap() {
        self::$uri = $_SERVER['REQUEST_URI'];
        switch (URL_MODE) {
            case 1: {
                self::parseCommon();
                break;
            }
            default: {
                self::parseRewrite();
            }
        }
        self::boot();
    }

    /*
     * 普通路由解析
     */
    public static function parseCommon() {
        $router = isset($_GET['r']) ? explode('/', $_GET['r']) : [
            DEFAULT_CONTROLLER,
            DEFAULT_ACTION
        ];

        self::$c_name = ucfirst($router[0]);
        self::$a_name = isset($router[1]) ? strtolower($router[1]) : DEFAULT_ACTION;
    }

    /*
     * URL重写路由解析
     */
    public static function parseRewrite() {

    }

    /*
     * 路由执行
     */
    public static function boot() {

        self::defineConst();
        $controller_name = 'Controller\\' . self::$c_name;
        $controller = new $controller_name();
        call_user_func([
            $controller,
            self::$a_name . 'Action'
        ]);
    }

    /*
     * 定义常用的全局常量
     */
    public static function defineConst() {
        define('CONTROLLER', self::$c_name);
        define('ACTION', self::$c_name);
        define('__URL__', SQ::createUrl(self::$c_name . '/' . self::$a_name));
    }

}