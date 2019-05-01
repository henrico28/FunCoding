<?php
	require_once "Controller/view.php";
	require_once "Controller/mysqlDB.php";
	class Statistik{
		protected $db;
		public function __construct(){
			$this->db = new mysqlDB("localhost", "root", "", "FunCoding");
		}

		public function start(){
            session_start();
			$nama = $_SESSION['userlogin'];
            session_write_close();

            $statistik = "SELECT Bahasa.NamaBahasa,lvl.NamaLevel,AVG(Ujian.Skor) FROM Ujian JOIN MasterSoal ON Ujian.IdMasterSoal = MasterSoal.IdMasterSoal JOIN Bahasa ON MasterSoal.IdBahasa = Bahasa.IdBahasa JOIN lvl ON  MasterSoal.IdLevel = lvl.IdLevel GROUP BY MasterSoal.IdMasterSoal";
            $res = $this->db->executeSelectQuery($statistik);
            return View::createView('hal_statistik-manajer.php',[
                "nama" => $nama,
                "statistik" => $res
            ]);
        }
	}
?>