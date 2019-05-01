<?php
	require_once "Controller/view.php";
	require_once "Controller/mysqlDB.php";
	class PenggunaManajerController{
		protected $db;
		public function __construct(){
			$this->db = new mysqlDB("localhost", "root", "", "FunCoding");
		}

		public function start(){
            session_start();
			$nama = $_SESSION['userlogin'];
            session_write_close();

            $data="SELECT NamaPengguna,Negara,Email FROM pengguna WHERE IdPosisi = 3";
            $res = $this->db->executeSelectQuery($data);

            $top10 = "SELECT Pengguna.Username,Pengguna.NamaPengguna,COUNT(Pengguna.Username) AS 'jumlahSertifikat' FROM Sertifikat JOIN Pengguna ON Sertifikat.Username = Pengguna.Username GROUP BY Username ORDER BY 'jumlahSertifikat' DESC";
            $res2 = $this->db->executeSelectQuery($top10);
            return View::createView('hal_pengguna-manajer.php',[
                "nama" => $nama,
                "data" => $res,
                "top10" => $res2
            ]);
        }
	}
?>