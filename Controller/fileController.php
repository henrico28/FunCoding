<?php
    require_once "Controller/view.php";
    require_once "Controller/mysqlDB.php";
    class FileController{
        protected $db;
        public function __construct(){
            $this->db = new mysqlDB("localhost","root","","funcoding");
        }
        public function upload(){            
            if ($_FILES['upfile']['name']!="") {
                $oldName=$_FILES['upfile']['tmp_name'];
                $newName=dirname(__DIR__)."\\View\\styles\\uploads\\".$_FILES['upfile']['name'];
                move_uploaded_file($oldName,$newName);
                session_start();
                $nama=$_SESSION['username'];
                session_write_close();
                $namaFile = $_FILES['upfile']['name'];
                $query = "UPDATE `pengguna` SET `profil` = '$namaFile' WHERE `Username`='$nama'";
                $this->db->executeNonSelectQuery($query);
                header('Location: profile');
            }
            else{
                echo "Error: Tidak ada file yang di upload";
            }
        }
        public function reset(){
            session_start();
            $nama=$_SESSION['username'];
            session_write_close();
            $query = "UPDATE `pengguna` SET `profil` = 'no-profile.jpg' WHERE `Username`='$nama'";
            $this->db->executeNonSelectQuery($query);
        }
    }
?>