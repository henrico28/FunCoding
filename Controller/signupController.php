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
			$user = $_POST['uname'];
			$pw = $_POST['pass'];
			$name = $_POST['fname'];
			$negara = $_POST['negara'];
			$email = $_POST['email'];
			if(isset($user) && $user != ""){
				$tempuser = $this->db->escapeString($user);
				$temppw = $this->db->escapeString($pw);
				$tempname = $this->db->escapeString($name);
				$tempnegara = $this->db->escapeString($negara);
				$tempemail = $this->db->escapeString($email);
				$hashedPass = md5($temppw);
				$query = "INSERT INTO pengguna (Username,Pass,NamaPengguna,Negara,Email,IdPosisi) VALUES ('$tempuser','$hashedPass','$tempname','$tempnegara','$tempemail',3)";
				$this->db->executeNonSelectQuery($query);
				header('Location: login ');
			}
			else{
				print_r("enter");
			}
		}
	}
?>