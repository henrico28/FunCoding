<?php
	$url = $_SERVER['REDIRECT_URL'];
	$baseURL= '/FunCoding';
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
			default:
				echo '404 not found';
				break;
		}
	}
	// hello
?>