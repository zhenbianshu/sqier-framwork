<?php
namespace Controller;

use Sqier\BaseController;
use Model\Test;

class Index extends BaseController {
    public function indexAction() {
        $model = new Test();
        $result = $model->doSomething();
        echo $result;
    }
}