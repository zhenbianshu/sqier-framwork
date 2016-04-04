<?php
namespace Model;

use Sqier\Model;

class Test extends Model {
    public function doSomething() {
        $sq = "welcome to SQIER!";
        return $sq;
    }
}