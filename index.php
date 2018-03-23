<?php
	
	session_start();
	
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
		case 'gallery':
			require_once(CONTROL_PATH.'GalleryController.php');	
			$controller = new GalleryController();
			break;
		case 'events':
			require_once(CONTROL_PATH.'EventsController.php');	
			$controller = new EventsController();
			break;
		case 'member':
			require_once(CONTROL_PATH.'MembreController.php');	
			$controller = new MembreController();
			break;
		case 'plans':
			require_once(CONTROL_PATH.'PlansController.php');	
			$controller = new PlansController();
			break;
		case 'admin':
			require_once(CONTROL_PATH.'AdminController.php');	
			$controller = new AdminController();
			break;
		default: 
			require_once(CONTROL_PATH.'HomeController.php');	
			$controller = new HomeController();
			break;
	
	}
	
	$controller->run();

	require_once(VIEWS_PATH.'footer.php');
?>