<?php
	require_once "Controller/view.php";
	require_once "Controller/mysqlDB.php";
	class SignupController{
		protected $db;
		public function __construct(){
			$this->db = new mysqlDB("localhost", "root", "", "FunCoding");
		}

		public function start(){
			return View::createView1('signup.php', [
				"nama"=> "contoh"
			]);
		}

		public function register(){
			$user = $_POST['Username'];
			$pw = $_POST['Password'];
			$name = $_POST['NamaPengguna'];
			$negara = $_POST['Negara'];
			$email = $_POST['Email'];
			$idPosisi = $_POST['IdPosisi'];
			if(isset($user) && $user != ""){
				$tempuser = $this->db->escapeString($user);
				$temppw = $this->db->escapeString($pw);
				$tempname = $this->db->escapeString($name);
				$tempnegara = $this->db->escapeString($negara);
				$tempemail = $this->db->escapeString($email);
				$tempidposisi = $this->db->escapeString($idPosisi);
				$query = "INSERT INTO pengguna (Username,Password,NamaPengguna,Negara,Email,IdPosisi) VALUES ('$tempuser','$temppw','$tempname','$tempnegara','$tempemail','$tempidposisi')";
				$this->db->executeNonSelectQuery($query);
			}
		}
	}
?>