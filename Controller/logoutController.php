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
            $_SESSION['userlogin']="";
            $_SESSION['username']="";
            $_SESSION['userlogin'] = "";
			$_SESSION['bahasa'] = "";
            $_SESSION['level'] = "";
            session_destroy();
            session_write_close();
            header('Location: frontpage');
		}
	}
?>