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
			$res = $_SESSION['ressoal'];
			session_write_close();
			$count=0;
			for($i=0;$i<4;$i++){
				if($_POST[$i+1]==$res[$i][5]){
					$count=$count+1;
				}
			}
			$qId = "SELECT IdMasterSoal FROM bahasa JOIN mastersoal ON mastersoal.IdBahasa = bahasa.IdBahasa JOIN lvl ON mastersoal.IdLevel = lvl.IdLevel WHERE bahasa.NamaBahasa = '$bahasa' AND lvl.NamaLevel = '$level'";
			$idmastersoal = $this->db->executeSelectQuery($qId);
			$score = ($count/4)*100;
			$idms = $idmastersoal[0][0];
			$query = "INSERT INTO ujian (Username,IdMasterSoal,Skor) VALUES ('$nama','$idms',$score)";
			$this->db->executeNonSelectQuery($query);
            return View::createView('result.php',[
				"nama"=> $nama,
				"bahasa"=> $bahasa,
				"level"=> $level,
				"score"=> $score,
			]);
		}
	}
?>