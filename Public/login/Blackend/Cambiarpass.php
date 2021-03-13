<?php
	
	require 'funcs/conexion.php';
	require 'funcs/funcs.php';
	
	$user_id = null;
	$token = null;

	if(empty($_GET['user_id'])){
      header('Location: index.php');
	}
	if(empty($_GET['token'])){
		header('Location: index.php');
	  }

	  $user_id = $mysqli->real_escape_string($_GET['user_id']);
	  $token = $mysqli->real_escape_string($_GET['token']);

	  if(!verificaTokenPass($user_id,$token)){
          echo"Ya haz cambiado la contraseña.";
		  exit;
	  }
	
?>