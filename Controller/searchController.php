<?php
	require_once "Controller/view.php";
	require_once "Controller/mysqlDB.php";
	class SearchController{
		protected $db;
		public function __construct(){
			$this->db = new mysqlDB("localhost", "root", "", "FunCoding");
		}

		public function search(){
			$bahasa = $_POST['language'];
			$level = $_POST['level'];
			session_start();
			$user = $_SESSION['username'];
			session_write_close();
			$qValidate = "SELECT NamaBahasa, NamaLevel, Skor FROM Ujian JOIN MasterSoal ON Ujian.IdMasterSoal = MasterSoal.IdMasterSoal JOIN Bahasa ON MasterSoal.IdBahasa = Bahasa.IdBahasa JOIN lvl ON MasterSoal.IdLevel = lvl.IdLevel WHERE Username = '$user' AND NamaBahasa = '$bahasa' AND NamaLevel = '$level'";
			$tmp = $this->db->executeSelectQuery($qValidate);
			if(count($tmp)==0){
				session_start();
				$_SESSION['language'] = $bahasa;
				$_SESSION['lvl'] = $level;
				$nama = $_SESSION['userlogin'];
				session_write_close();
				$query = "SELECT IdSoal, soal, A, B, C, D, JawabanSoal, Soal.IdMasterSoal FROM( SELECT IdMasterSoal FROM bahasa JOIN mastersoal ON mastersoal.IdBahasa = bahasa.IdBahasa JOIN lvl ON mastersoal.IdLevel = lvl.IdLevel WHERE bahasa.NamaBahasa = '$bahasa' AND lvl.NamaLevel = '$level' )AS himpBaru JOIN soal ON himpBaru.IdMasterSoal = soal.IdMasterSoal";
				$resSoal = $this->db->executeSelectQuery($query);
				session_start();
				$_SESSION['ressoal']=$resSoal;
				session_write_close();
				return View::createView('halujian.php',[
					"nama"=> $nama,
					"bahasa"=> $bahasa,
					"level"=> $level,
					"soal"=> $resSoal
				]);
			}
			else{
				?>
				<script>
					alert("You have attempt this examination, Sorry no retakes!");
				</script>
				<?php
				session_start();
				$nama = $_SESSION['userlogin'];
				$b = $_SESSION['bahasa'];
				$l = $_SESSION['level'];
				session_write_close();
				return View::createView('homeuser.php',[
					"nama"=> $nama,
					"bahasa"=> $b,
					"level"=> $l
				]);

			}
			
        }
	}
?>