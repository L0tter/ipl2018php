<?php
	
	session_start();
	
	$_SESSION['authentifie'] = false;
	
	# constants - Daspremont Elodie
	define('VIEWS_PATH','views/');
	define('CONTROL_PATH','controllers/');

	# Automatised require for 'models' class - Daspremont Elodie
	function load($class) {
		require_once 'models/' . $class . '.class.php';
	}
	spl_autoload_register('load'); 
	
	# Database connexion - Daspremont Elodie
	$db=Db::getInstance();

	require_once(VIEWS_PATH.'header.php');
	
	#vérification de la variable action
	$action = (isset($_GET['action'])) ? $_GET['action'] : 'default';
	
	switch($action){
		case 'genese':
			require_once(CONTROL_PATH.'MemberController.php');	
			$controller = new MemberController();
			break;
		default: 
			require_once(CONTROL_PATH.'AccueilController.php');	
			$controller = new AccueilController();
			break;
	
	}
	
	$controller->run();

	require_once(VIEWS_PATH.'footer.php');
?>