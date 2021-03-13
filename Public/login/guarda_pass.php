<?php
	
	require 'funcs/conexion.php';//intancia con el archivo conexion
	require 'funcs/funcs.php';//intancia con el archivo de las funsiones
	
	
	$user_id = $mysqli->real_escape_string($_POST['user_id']);
	$token = $mysqli->real_escape_string($_POST['token']);
	$password = $mysqli->real_escape_string($_POST['password']);
	$con_password = $mysqli->real_escape_string($_POST['con_password']);


if(strlen(trim($password)) < 5 ){
	echo'
    <script type="text/javascript">
     alert("La Contraseña es demaciado corta");
	 window.location.href="javascript:history.back()";
     </script>';
}else{

	if(validaPassword($password,$con_password)){

		$pass_hash = hashPassword($password);

		if(cambiaPassword($pass_hash, $user_id, $token)){

			echo'
        <script type="text/javascript">
        alert("La contraseña se cambio con exito");
	    window.location.href="index.php";
        </script>';
		}else{
			echo "error al modificar";
		}
	}else{
		echo'
    <script type="text/javascript">
     alert("La Contraseña no Coinciden");
	 window.location.href="javascript:history.back()";
     </script>';
	}

}
?>	