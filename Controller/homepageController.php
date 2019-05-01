<?php
	require_once "Controller/view.php";
	require_once "Controller/mysqlDB.php";
	class HomepageController{
		protected $db;
		public function __construct(){
			$this->db = new mysqlDB("localhost", "root", "", "FunCoding");
		}

		public function start(){
            session_start();
			$nama = $_SESSION['userlogin'];
			$bahasa = $_SESSION['bahasa'];
			$level = $_SESSION['level'];
            session_write_close();
            return View::createView('homeuser.php',[
				"nama"=> $nama,
				"bahasa"=> $bahasa,
				"level"=> $level
            ]);
        }
	}
?>