<?php
	require_once "Controller/view.php";
	require_once "Controller/mysqlDB.php";
	class UpdateController{
		protected $db;
		public function __construct(){
			$this->db = new mysqlDB("localhost", "root", "", "FunCoding");
		}

		public function start(){
            session_start();
            $nama = $_SESSION['userlogin'];
            session_write_close();
			return View::createView('update.php', [
                "nama"=> $nama
            ]);
		}

		public function update(){
			$npass = $_POST['npass'];
			$cpass = $_POST['cpass'];
			if(isset($npass) && $npass!=""){
				$npass = $this->db->escapeString($npass);
			}
			if(isset($cpass) && $cpass!=""){
				$cpass = $this->db->escapeString($cpass);
            }
            session_start();
            $uname = $_SESSION['username'];
            $nama = $_SESSION['userlogin'];
            session_write_close();
            if($npass == $cpass){
                $hashedNPass = md5($npass);
                $qupdate="UPDATE pengguna SET Username = Username, Pass = '$hashedNPass', NamaPengguna = NamaPengguna, Negara = Negara, Email = Email, profil = profil, IdPosisi = IdPosisi WHERE Username = '$uname' ";
                $this->db->executeNonSelectQuery($qupdate);
                ?>
                <script>
                    alert ("You Successfully updated your password");
                </script>
                <?php
                return View::createView('update.php', [
                    "nama"=> $nama
                ]);
            }
			else{
                ?>
                <script>
                    alert ("You failed to update your password");
                </script>
                <?php
                return View::createView('update.php', [
                    "nama"=> $nama
                ]);
            }
		}
	}
?>