<?php
	require_once "Controller/view.php";
	require_once "Controller/mysqlDB.php";
	class AdminController{
		protected $db;
		public function __construct(){
			$this->db = new mysqlDB("localhost", "root", "", "FunCoding");
		}

		public function start(){
            session_start();
			$nama = $_SESSION['userlogin'];
            session_write_close();
            return View::createView('homepage-Admin.php',[
				"nama"=> $nama
            ]);
        }
	}
?>