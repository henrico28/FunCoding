<?php
	require_once "Controller/view.php";
	require_once "Controller/mysqlDB.php";
	class SignupController{
		protected $db;
		public function __construct(){
			$this->db = new mysqlDB("localhost", "root", "", "FunCoding");
		}

		public function start(){
			return View::createView1('signup.php', [
				"nama"=> "contoh"
			]);
		}
	}
?>