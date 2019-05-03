<?php

require_once "Controller/view.php";
require_once "Controller/mysqlDB.php";
class deleteController{
    protected $db;
    protected $user;
    public function __construct($param){
        $this->db = new mysqlDB("localhost", "root", "", "FunCoding");
        $this->user = $param;
    }
    public function start(){
        $query = "DELETE FROM `pengguna` WHERE `Username` = '$this->user'";
        $hasil = $this->db->executeNonSelectQuery($query);
        return View::createView('hal_pengguna-admin.php',[
            "nama" => $nama,
            "data" => array($res),
        ]);
    }
}

?>