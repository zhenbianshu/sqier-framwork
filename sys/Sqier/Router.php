<?php
namespace Sqier;
class Router {
    public static $uri;

    public static function bootstrap() {
        self::$uri = $_SERVER['REQUEST_URI'];
        switch (URL_MODE) {
            case 1: {
                self::rBoot();
                break;
            }
            default: {
                self::rBoot();
            }
        }
    }

    public static function rBoot() {
        $router = isset($_GET['r']) ? explode('/', $_GET['r']) : [
            'index',
            'index'
        ];
        $cName = 'Controller\\' . ucfirst($router[0]);
        $aName = isset($router[1]) ? strtolower($router[1]) . 'Action' : 'indexAction';
        $controller = new $cName();
        $controller->$aName();
    }
}