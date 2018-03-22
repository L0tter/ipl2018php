<?php
class HomeController {
	
	public function __construct(){
	
	}
	
	public function run(){
	
	
	
	
	if(!empty($_POST['logINUP'])){
		require_once(VIEWS_PATH . 'login_up.php ');
	}else
		require_once(VIEWS_PATH . 'home.php');
	}
	

}
?>