<?php

require_once "Controller/view.php";
require_once "Controller/mysqlDB.php";
class deleteController{
    protected $db;
    public function __construct(){
        $this->db = new mysqlDB("localhost", "root", "", "FunCoding");
    }
    public function start(){
        $cek = 'SELECT "Username" FROM "Ujian" WHERE "Username" = "'.$_GET['id'].'"';
        if(sizeof($cek)==0){
        $query = 'DELETE FROM `pengguna` WHERE `Username` = "'.$_GET['id'].'"';
        $this->db->executeNonSelectQuery($query);

        }
        else{
            $query = 'DELETE FROM `Ujian` WHERE `Username` = "'.$_GET['id'].'"';
            $this->db->executeNonSelectQuery($query);
            $query = 'DELETE FROM `penggunasoal` WHERE `Username` = "'.$_GET['id'].'"';
            $this->db->executeNonSelectQuery($query);
            $query = 'DELETE FROM `pengguna` WHERE `Username` = "'.$_GET['id'].'"';
            $this->db->executeNonSelectQuery($query);

        }
    }
}

?>