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
<<<<<<< HEAD
            $username = $_SESSION['username'];
            session_write_close();
            echo $username;
            $query="SELECT NamaPengguna,Username,Negara,Email FROM pengguna WHERE Username = '$username'";
            $res = $this->db->executeSelectQuery($query);
=======
            $user = $_SESSION['userlogin'];
            session_write_close();
            
            $data="SELECT NamaPengguna,Username,Negara,Email FROM pengguna WHERE NamaPengguna = '$user'";
            $res = $this->db->executeSelectQuery($data);

            $history = "SELECT NamaBahasa,NamaLevel,Skor FROM Ujian JOIN MasterSoal ON Ujian.IdMasterSoal = MasterSoal.IdMasterSoal
            JOIN Bahasa ON MasterSoal.IdBahasa = Bahasa.IdBahasa JOIN Level ON MasterSoal.IdLevel = Level.IdLevel JOIN Pengguna ON Ujian.Username = Pengguna.Username WHERE NamaPengguna = '$user'";
            $res2 = $this->db->executeSelectQuery($history);

>>>>>>> 7eedcfc4a748199f711f91c348028f55d712dabd
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
