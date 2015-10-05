<?php

	// Définition du repertoire APP
	define('dirApp', str_replace('index.php','', $_SERVER['SCRIPT_FILENAME']));
	define('http', str_replace('index.php','', $_SERVER['SCRIPT_NAME']));



	// Separe la class et la méthode
	$arrUrl 	 = explode('/', $_GET['p']);
	$controller  = $arrUrl[0];
	$action 	 = $arrUrl[1];

	// Classe de la base de données
	require(dirApp.'app/models/Db.php');

	// Mini rooter
	if($controller == 'todo'){

		require(dirApp.'app/controlers/todo/Todo.php');

		$todo = new todo();
		$todo->$action();


	}





?>