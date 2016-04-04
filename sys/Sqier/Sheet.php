<?php
namespace Sqier;
use Sqier\Model;
abstract class Sheet extends Model{
    public $db;

    public function __construct() {
        $this->db = Db::getInstance();
        $sql = 'SHOW COLUNMS FROM ' .  __CLASS__;
        $this->db->query($sql);
    }
}