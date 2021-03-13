<?php
	
	require 'funcs/conexion.php';
	require 'funcs/funcs.php'; 
	
	$mensaje = null;
	
	if(isset($_GET["id"]) AND isset($_GET['val'])){

		$idUsuario = $_GET['id'];
		$token = $_GET['val'];

		$mensaje = validaIdToken($idUsuario,$token);
	}
	
?>