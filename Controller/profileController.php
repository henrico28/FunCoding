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
            $query="SELECT `*` FROM `pengguna` WHERE `Username`=$user";
            $res = $this->db->executeSelectQuery($query);
            return View::createView('profile.php',[
                "nama" => $res[0][2]
                "user" => $res[0][0]
                "negara" => $res[0][3]
                "email" => $res[0][4]
            ]);
        }
    }
?>
