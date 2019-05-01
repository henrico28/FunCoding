<?php
	require_once "Controller/view.php";
	require_once "Controller/mysqlDB.php";
	class Top10Controller{
		protected $db;
		public function __construct(){
			$this->db = new mysqlDB("localhost", "root", "", "FunCoding");
		}

		public function start(){
            session_start();
			$nama = $_SESSION['userlogin'];
            session_write_close();

            $top10 = "SELECT Pengguna.Username,Pengguna.NamaPengguna,COUNT(Pengguna.Username) AS 'Jumlah Sertifikat' FROM Sertifikat JOIN Pengguna ON Sertifikat.Username = Pengguna.Username GROUP BY Username ORDER BY 'Jumlah Sertifikat' DESC";
            $res2 = $this->db->executeSelectQuery($top10);
            return View::createView('hal_top10-manajer.php',[
                "nama" => $nama,
                "top10" => $res2
            ]);
        }
	}
?>