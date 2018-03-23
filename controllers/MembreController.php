<?php
class MembreController {
	
	public function __construct(){
	
	}
	
	public function run(){
	
	if(!empty($_SESSION['authentifie'])){
		require_once(VIEWS_PATH . 'member.php');
	}
	elseif(!empty($_POST)){
		if($_POST['user'] == 'root' && $_POST['passwd'] == 'root'){
			$_SESSION['authentifie'] = 'memberAccess';
			$_SESSION['login'] = 'root';
			require_once(VIEWS_PATH . 'member.php');
		}
	}else
		require_once(VIEWS_PATH . 'home.php');
	}
	
}

?>