<?php
    require_once "mysqlDB.php";
    $db = new mysqlDB("localhost","root","","funcoding");
    
    $usr = $_GET["usr"];
    $query = "SELECT * FROM pengguna WHERE Username ='$usr'";
    $res = $db->executeSelectQuery($query);
    if($res){
        echo "Username tidak bisa digunakan";
    }
    else{
        echo "Username bisa digunakan";
    }
?>