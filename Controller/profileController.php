<?php
	require_once "Controller/view.php";
	require_once "Controller/mysqlDB.php";
	class ProfileController{
		protected $db;
		public function __construct(){
			$this->db = new mysqlDB("localhost", "root", "", "FunCoding");
        }
        
        public function start(){
            session_start();
            $user = $_SESSION['username'];
            session_write_close();
            $data="SELECT NamaPengguna,Username,Negara,Email FROM pengguna WHERE Username = '$user'";
            $res = $this->db->executeSelectQuery($data);

            $history = "SELECT NamaBahasa,NamaLevel,Skor FROM Ujian JOIN MasterSoal ON Ujian.IdMasterSoal = MasterSoal.IdMasterSoal
            JOIN Bahasa ON MasterSoal.IdBahasa = Bahasa.IdBahasa JOIN Level ON MasterSoal.IdLevel = Level.IdLevel WHERE Username = '$user'";
            $res2 = $this->db->executeSelectQuery($history);

            return View::createView('profile.php',[
                "nama" => $res[0][0],
                "user" => $res[0][1],
                "negara" => $res[0][2],
                "email" => $res[0][3],
                "history" => $res2
            ]);
        }
    }
?>
