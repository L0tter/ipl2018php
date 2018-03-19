<?php
	
	# constants - Daspremont Elodie
	define('VIEWS_PATH','views/');
	define('CONTROL_PATH','controllers/');

	# Automatised require for 'models' class - Daspremont Elodie
	function load($class) {
		require_once 'models/' . $class . '.class.php';
	}
	spl_autoload_register('load'); 
	
	# Database connexion - Daspremont Elodie
	$db=DataBase::getInstance();

	require_once(VIEWS_PATH.'header.php');



	require_once(VIEWS_PATH.'footer.php');
?>