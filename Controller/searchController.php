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
			$_SESSION['bahasa'] = $bahasa;
			$_SESSION['level'] = $level;
			$nama = $_SESSION['userlogin'];
			session_write_close();
			$query = "SELECT soal, A, B, C, D, JawabanSoal FROM( SELECT IdMasterSoal FROM bahasa JOIN mastersoal ON mastersoal.IdBahasa = bahasa.IdBahasa JOIN lvl ON mastersoal.IdLevel = lvl.IdLevel WHERE bahasa.NamaBahasa = '$bahasa' AND lvl.NamaLevel = '$level' )AS himpBaru JOIN soal ON himpBaru.IdMasterSoal = soal.IdMasterSoal";
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
	}
?>