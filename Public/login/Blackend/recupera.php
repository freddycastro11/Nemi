<?php

require 'funcs/conexion.php';
	require 'funcs/funcs.php';

	$errors = array();

	if(!empty($_POST)){

		$email = $mysqli->real_escape_string($_POST['email']);

		  if(!isEmail($email)){
                $errors[]='"El correo no esvalido bb"';
            }


          if(emailExiste($email)){
           
			 $user_id = getValor('id','correo',$email);
			 $nombre = getValor('nombre','correo',$email);

			 $token = generaTokenPass($user_id);
			 $url='http://'.$_SERVER["SERVER_NAME"].'/Nemi/Public/login/cambia_pass.php?user_id='.$user_id.'&token='.$token;
			 $asunto = 'Cambiar contraseña Nemi';

			 $cuerpo = "Hola $nombre haz solicitado un cambio de contraseña <br><br>
			 Haz click en cambiar contraseña para que la puedas cambiar<br>
			 La nueva contraseña tiene que ser mayor a 6 caracteres.  <a href='$url'>Cambiar contraseña</a>";

			 if(enviarEmail($email,$nombre,$asunto,$cuerpo)){
           
				echo "Se envio un correo a $email con las indicaciones para cambiar tu contraseña<br>
				<a href='index.php'>Inicia secion</a>";

				exit;

			 }else{
				 $errors[]='"No se pudo"';
			 }
		  }else{
			$errors[]='"El correo introducido no esta registrado"';
		  }

		
	}
?>