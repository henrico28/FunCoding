<?php
	$url = $_SERVER['REDIRECT_URL'];
	$baseURL= '/funcoding';
	if($_SERVER["REQUEST_METHOD"]=="GET"){
		switch ($url){
			case $baseURL."/frontpage":
				require_once "Controller/frontpageController.php";
				$frontpage = new FrontpageController();
				echo $frontpage ->start();
				break;
			case $baseURL."/login":
				require_once "Controller/loginController.php";
				$login = new LoginController();
				echo $login -> start();
				break;
			case $baseURL."/signup":
				require_once "Controller/signupController.php";
				$signup = new SignupController();
				echo $signup -> start();
				break;
			case $baseURL."/homepage":
				require_once "Controller/homepageController.php";
				$homepage = new HomepageController();
				echo $homepage -> start();
				break;
			case $baseURL."/profile":
				require_once "Controller/profileController.php";
				$profile = new ProfileController();
				echo $profile -> start();
				break;
			case $baseURL."/logout":
				require_once "Controller/logoutController.php";
				$logout = new LogoutController();
				echo $logout ->logout();
			case $baseURL."/manager":
				require_once "Controller/managerController.php";
				$manager = new ManagerController();
				echo $manager -> start();
				break;
			case $baseURL."/penggunaManajer":
				require_once "Controller/penggunaManajerController.php";
				$penggunaManajer = new PenggunaManajerController();
				echo $penggunaManajer -> start();
				break;
			case $baseURL."/top10":
				require_once "Controller/top10Controller.php";
				$top10 = new Top10Controller();
				echo $top10 -> start();
				break;
			case $baseURL."/statistik":
				require_once "Controller/statistikController.php";
				$statistik = new Statistik();
				echo $statistik -> start();
				break;
			case $baseURL."/admin":
				require_once "Controller/adminController.php";
				$admin = new AdminController();
				echo $admin -> start();
				break;
			case $baseURL."/penggunaAdmin":
				require_once "Controller/penggunaAdminController.php";
				$penggunaAdmin = new PenggunaAdminController();
				echo $penggunaAdmin -> start();
				break;
			case $baseURL."/soalAdmin":
				require_once "Controller/editadminController.php";
				$penggunaAdmin = new EditAdminController();
				echo $penggunaAdmin -> start();
				break;
			case $baseURL."/updatepass":
				require_once "Controller/updateController.php";
				$updatepass = new UpdateController();
				echo $updatepass -> start();
				break;
			case $baseURL."/delete":
				require_once "Controller/deleteController.php";
				$delete = new deleteController($_GET);
				$delete -> start();
				header("Location:penggunaAdmin");
				break;
			default:
				echo '404 not found';
				break;
		}
	}
	else if($_SERVER["REQUEST_METHOD"]=="POST"){
		switch ($url){
			case $baseURL."/signin":
                require_once "Controller/loginController.php";
                $log = new LoginController();
                echo $log->check();
				break;
			case $baseURL."/adduser":
				require_once "Controller/signupController.php";
				$add = new SignupController();
				echo $add->register();
				break;
			case $baseURL."/reset":
                require_once "Controller/fileController.php";
                $file = new FileController();
                echo $file->reset();
                header('Location: profile');
                break;
            case $baseURL."/upload":
                require_once "Controller/fileController.php";
                $file = new FileController();
                echo $file->upload();
				break;
			case $baseURL."/search":
				require_once "Controller/searchController.php";
				$search = new SearchController();
				echo $search->search();
				break;
			case $baseURL."/adduseradmin":
				require_once "Controller/AdduserController.php";
				$add = new AdduserController();
				echo $add->register();
				break;
			case $baseURL."/editsoal":
				require_once "Controller/EditsoalController.php";
				$edit = new EditsoalController();
				echo $edit->register();
				break;
			case $baseURL."/update":
				require_once "Controller/updateController.php";
				$update = new UpdateController();
				echo $update->update();
				break;
			case $baseURL."/result":
				require_once "Controller/ujianController.php";
				$result = new ResultController();
				echo $result -> start();
				break;
			case $baseURL. "/createpdf":
				require_once "Controller/pdf/dompdf.php";
				
			default:
				echo '404 not found';
				break;
		}
	}
?>