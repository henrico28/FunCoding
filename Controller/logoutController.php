<?php
	require_once "Controller/view.php";
	require_once "Controller/mysqlDB.php";
	class LogoutController{
		protected $db;
		public function __construct(){
			$this->db = new mysqlDB("localhost", "root", "", "FunCoding");
		}

		public function logout(){   
			session_start();
			unset($_SESSION['userlogin']);
			unset($_SESSION['username']);
			unset($_SESSION['bahasa']);
			unset($_SESSION['level']);
            session_destroy();
            session_write_close();
            header('Location: frontpage');
		}
	}
?>