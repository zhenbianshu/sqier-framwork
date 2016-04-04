<?php
namespace Controller;

use Sqier\Controller;
use Model\Test;

class Index extends Controller {
    public function indexAction() {
        $model = new Test();
        $result = $model->doSomething();

        $this->render(['sq'=>$result]);
    }
}