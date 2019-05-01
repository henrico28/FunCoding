<?php
	require_once "Controller/view.php";
	require_once "Controller/mysqlDB.php";
	class SearchController{
		protected $db;
		public function __construct(){
			$this->db = new mysqlDB("localhost", "root", "", "FunCoding");
		}

		public function start(){
            $bahasa = $_POST['uname'];
			$level = $_POST['pass'];
            return View::createView('halujian.php',[
				"nama"=> $nama,
				"bahasa"=> $bahasa,
				"level"=> $level
            ]);
        }
	}
?>