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

            $start = 0;
            $query="SELECT NamaPengguna,Negara,Email FROM pengguna WHERE IdPosisi = 3";
            $res = $this->db->executeSelectQuery($query);
            $show = 5;
            $page = count($res) / $show;
            if(isset($_GET['start'])){
                $start=$this->db->escapeString($_GET['start']);
            }
            $query.=" LIMIT $start,$show";
            $result = $this->db->executeSelectQuery($query);

            $top10 = "SELECT Pengguna.Username,Pengguna.NamaPengguna,COUNT(Pengguna.Username) AS 'jumlahSertifikat' FROM Sertifikat JOIN Pengguna ON Sertifikat.Username = Pengguna.Username GROUP BY Username ORDER BY 'jumlahSertifikat' DESC";
            $res2 = $this->db->executeSelectQuery($top10);
            return View::createView('hal_pengguna-manajer.php',[
                "nama" => $nama,
                "data" => $result,
                "top10" => $res2,
                "page"=>$page,
                "query"=>$query
            ]);
        }
	}
?>