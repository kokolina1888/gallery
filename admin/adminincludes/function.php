<?php 

//scanning the application and looking for undeclared objects

function __autoload($class) {

	$class = strtolower($class);

	$the_path = "adminincludes/{$class}.php";

	if(file_exists($the_path)) {

		require_once($the_path);
	
	} else {

		die("This file named {$class}.php was not found");
	}

}

?>