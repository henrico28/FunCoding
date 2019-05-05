<?php
	require_once "Controller/view.php";
	require_once "Controller/mysqlDB.php";
	class ResultController{
		protected $db;
		public function __construct(){
			$this->db = new mysqlDB("localhost", "root", "", "FunCoding");
		}

		public function start(){
			$end_time = time();
			session_start();
			$bahasa = $_SESSION['language'];
			$level = $_SESSION['lvl'];
			$username = $_SESSION['username'];
			$nama = $_SESSION['userlogin'];
			$res = $_SESSION['ressoal'];
			$durasi = ($end_time - $_SESSION['start_time']);
			$idmsoal = $_SESSION['idmsoal'];
			session_write_close();
			$count=0;
			for($i=0;$i<sizeof($res);$i++){
				$temp = $_POST[$i+1];
				$idSoal = $res[$i][0];
				$query = "INSERT INTO penggunaSoal (Username,IdSoal,Jawaban) VALUES ('$username','$idSoal','$temp')";
				$this->db->executeNonSelectQuery($query);
			}
			$query = "SELECT COUNT(penggunaSoal.IdSoal) FROM penggunaSoal JOIN soal ON penggunaSoal.IdSoal = soal.IdSoal WHERE penggunaSoal.Jawaban = soal.JawabanSoal AND penggunaSoal.username = '$username' AND soal.IdMasterSoal = $idmsoal";
			$hasil = $this->db->executeSelectQuery($query);
			$score = ($hasil[0][0])*10;
			$idms = $res[0][7];
			if($score>=70){
				$query = "INSERT INTO ujian (Username,IdMasterSoal,Skor,Hasil,Durasi) VALUES ('$username','$idms',$score,'LULUS',$durasi)";
				$this->db->executeNonSelectQuery($query);
			}
			else{
				$query = "INSERT INTO ujian (Username,IdMasterSoal,Skor,Hasil,Durasi) VALUES ('$username','$idms',$score,'TIDAK LULUS',$durasi)";
				$this->db->executeNonSelectQuery($query);
			}
            return View::createView('result.php',[
				"nama"=> $nama,
				"bahasa"=> $bahasa,
				"level"=> $level,
				"score"=> $score,
			]);
		}
	}
?>