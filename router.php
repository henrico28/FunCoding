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
			default:
				echo '404 not found';
				break;
		}
	}
?>