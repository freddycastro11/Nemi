<?php 
	
    session_start();
	require 'funcs/conexion.php';
	require 'funcs/funcs.php';

	$errors = array();

	if(!empty($_POST)){

		$usuario = $mysqli->real_escape_string($_POST['usuario']);
		$password = $mysqli->real_escape_string($_POST['password']);

		if(isNullLogin($usuario,$password)){
           $errors[]='"Rellena los campos."';
		}

		$errors[]= login($usuario,$password);
	}
?>