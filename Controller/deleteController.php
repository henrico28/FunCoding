<?php

require_once "Controller/view.php";
require_once "Controller/mysqlDB.php";
class deleteController{
    protected $db;
    public function __construct(){
        $this->db = new mysqlDB("localhost", "root", "", "FunCoding");
    }
    public function start(){
        $query = 'DELETE FROM `pengguna` WHERE `Username` = "'.$_GET['id'].'"';
        $this->db->executeNonSelectQuery($query);
    }
}

?>