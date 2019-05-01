<?php
	require_once "Controller/view.php";
	require_once "Controller/mysqlDB.php";
	class PenggunaManajerController{
		protected $db;
		public function __construct(){
			$this->db = new mysqlDB("localhost", "root", "", "FunCoding");
		}

		public function start(){
            session_start();
			$nama = $_SESSION['userlogin'];
            session_write_close();

            $data="SELECT NamaPengguna,Negara,Email FROM pengguna";
            $res = $this->db->executeSelectQuery($data);

            return View::createView('hal_pengguna-manajer.php',[
                "nama" => $nama,
                "data" => $res
            ]);
        }
	}
?>