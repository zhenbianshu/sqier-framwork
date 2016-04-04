<?php
namespace Sqier;
class View{
    private static $template_file;

    public static function display($data, $view_file) {

        if(is_array($data)) {
            extract($data);
        }else {
            //抛出变量类型异常
        }

        ob_start();
        ob_implicit_flush(0);
        include self::checkTemplate($view_file);
        $content = ob_get_clean();

        echo $content;
    }


    /*
     * 验证其模板文件的存在
     */
    public static function checkTemplate($view_file) {
        $view_folder = APP_PATH . VIEW_PATH . '/';
        $template_name = empty($view_file) ? ACTION : $view_file;
        self::$template_file = $view_folder . CONTROLLER . '/' . $template_name . VEXT;
        if(file_exists(self::$template_file)) {
            return self::$template_file;
        }else {
            //抛出模板文件不存在异常
        }
    }


}