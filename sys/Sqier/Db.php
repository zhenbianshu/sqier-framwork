<?php
namespace Sqier;
class Db {
    protected static $_instance;
    public static function getInstance() {
        if(!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function __construct() {
        $link = new \mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME) or die("连接数据库失败,请检查数据库配置信息!");
        $link->query('set names utf8');
    }
    public function __clone() {
        return self::getInstance();
    }

    public function insert(){

    }
    public function delete(){

    }
    public function update(){

    }
    public function query(){

    }
}