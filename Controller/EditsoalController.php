<?php
    require_once "Controller/view.php";
    require_once "Controller/mysqlDB.php";
	class EditsoalController{
		protected $db;
		public function __construct(){
			$this->db = new mysqlDB("localhost", "root", "", "FunCoding");
		}

		public function start(){
			return View::createView1('hal_soal-admin.php', []);
		}

		public function register(){
			$id = $_POST['id'];
			$soal = $_POST['soal'];
			$opa = $_POST['opa'];
			$opb = $_POST['opb'];
            $opc= $_POST['opc'];
            $opd = $_POST['opd'];
			$jwb= $_POST['jwb'];
			if(isset($id) && $id != ""){
				$tempid = $this->db->escapeString($id);
				$tempsoal = $this->db->escapeString($soal);
				$tempopa = $this->db->escapeString($opa);
				$tempopb = $this->db->escapeString($opb);
                $tempopc = $this->db->escapeString($opc);
                $tempopd = $this->db->escapeString($opd);
				$tempjwb = $this->db->escapeString($jwb);
				$query = "INSERT INTO soal (IdMasterSoal,Soal,A,B,C,D,JawabanSoal) VALUES ('$tempid','$tempsoal','$tempopa','$tempopb','$tempopc','$tempopd','$tempjwb')";
				$this->db->executeNonSelectQuery($query);
				header('Location: soalAdmin');
			}
			else{
				print_r("enter");
			}
		}
	}
?>