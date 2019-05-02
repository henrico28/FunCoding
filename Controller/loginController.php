<?php
	require_once "Controller/view.php";
	require_once "Controller/mysqlDB.php";
	class LoginController{
		protected $db;
		public function __construct(){
			$this->db = new mysqlDB("localhost", "root", "", "FunCoding");
		}

		public function start(){
			return View::createView1('login.php', []);
		}

		public function check(){
			$uname = $_POST['uname'];
			$pass = $_POST['pass'];
			$query="SELECT `idPosisi`,`NamaPengguna`, `Username` FROM `pengguna` WHERE `Username`=";
			if(isset($uname) && $uname!=""){
				$uname = $this->db->escapeString($uname);
				$query.="'$uname' AND ";
			}
			if(isset($pass) && $pass!=""){
				$pass = $this->db->escapeString($pass);
				$hashedPassword = md5($pass);
				$query.="`Pass`='$hashedPassword'";
			}
			$res = $this->db->executeSelectQuery($query);
			if(count($res)!=0){
				session_start();
					$_SESSION['userlogin'] = $res[0][1];
					$_SESSION['username'] = $res[0][2];
					$_SESSION['role']=$res[0][0];
				session_write_close();
				if($res[0][0]==1){
					session_start();
					$_SESSION['userlogin'] = $res[0][1];
					session_write_close();
					header('Location: admin');
				}
				else if($res[0][0]==2){
					session_start();
					$_SESSION['userlogin'] = $res[0][1];
					session_write_close();
					header('Location: manager');
				}
				else if($res[0][0]==3){
					$qBahasa = "SELECT `NamaBahasa` FROM `bahasa`";
					$qLevel = "SELECT `NamaLevel` FROM `lvl`";
					$resBahasa = $this->db->executeSelectQuery($qBahasa);
					$resLevel = $this->db->executeSelectQuery($qLevel);
					session_start();
						$_SESSION['bahasa'] = $resBahasa;
						$_SESSION['level'] = $resLevel;
					session_write_close();
					header('Location: homepage');
				}
			}
			else{
				?>
				<script type="text/javascript">
					alert("Wrong Username or Password");
				</script>
				<?php
					return View::createView1('login.php', []);			
			}

		}
	}
?>