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
            $user = $_SESSION['userlogin'];
            session_write_close();
            $query="SELECT NamaPengguna,Username,Negara,Email FROM pengguna WHERE NamaPengguna = '$user'";
            $res = $this->db->executeSelectQuery($query);
            return View::createView('profile.php',[
                "nama" => $res[0][0],
                "user" => $res[0][1],
                "negara" => $res[0][2],
                "email" => $res[0][3]
            ]);
        }
    }
?>
