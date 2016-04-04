<?php
namespace Sqier;
abstract class Controller{

    public $view_file = '';

    public function __construct() {

    }

    protected function render($data = null){
        View::display($data, $this->view_file);
    }
}