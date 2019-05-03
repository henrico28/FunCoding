<?php
	require_once "Controller/view.php";
	require_once "Controller/mysqlDB.php";
	class PenggunaAdminController{
		protected $db;
		public function __construct(){
			$this->db = new mysqlDB("localhost", "root", "", "FunCoding");
		}

		public function start(){
            session_start();
			$nama = $_SESSION['userlogin'];
            session_write_close();

            $data="SELECT Username,NamaPengguna,Negara,Email FROM pengguna WHERE IdPosisi = 3";
            $res = $this->db->executeSelectQuery($data);

            return View::createView('hal_pengguna-admin.php',[
                "nama" => $nama,
                "data" => $res,
            ]);
        }
	}
?>