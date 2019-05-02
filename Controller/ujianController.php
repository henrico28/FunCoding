<?php
	require_once "Controller/view.php";
	require_once "Controller/mysqlDB.php";
	class ResultController{
		protected $db;
		public function __construct(){
			$this->db = new mysqlDB("localhost", "root", "", "FunCoding");
		}

		public function start(){
			session_start();
			$bahasa = $_SESSION['bahasa'];
			$level = $_SESSION['level'];
			$nama = $_SESSION['userlogin'];
			$soal = $_SESSION['ressoal'];
			session_write_close();
			$count=0;
			for($i=0;$i<4;$i++){
				if($_POST[$i+1]==$soal[$i][5]){
					$count=$count+1;
				}
			}
			$score = ($count/4)*100;
            return View::createView('result.php',[
				"nama"=> $nama,
				"bahasa"=> $bahasa,
				"level"=> $level,
				"score"=> $score
            ]);
		}
	}
?>