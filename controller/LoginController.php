<?php
class LoginController {
	
	public function __construct(){
	
	}
	
	public function run(){
	$_SESSION['login'] = 'root';
	if(!empty($_POST)){
		if($_POST['user'] == 'root' && $_POST['root']){
			$_SESSION['authentifie'] = 'autorise';
			$_SESSION['login'] = 'root';
			header("Location: index.php?action=membre"); 
			die();
		}
	}
	
	
	require_once(VIEW_PATH . 'member.php');
	}
	


?>