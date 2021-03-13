<?php
	
	require 'funcs/conexion.php';
	require 'funcs/funcs.php';
	
	$errors = array();
	
	if(!empty($_POST)){
		$nombre = $mysqli->real_escape_string($_POST['nombre']);
		$usuario = $mysqli->real_escape_string($_POST['usuario']);
		$password = $mysqli->real_escape_string($_POST['password']);
		$con_password = $mysqli->real_escape_string($_POST['con_password']);
		$email = $mysqli->real_escape_string($_POST['email']);

		$activo = 0;
		$tipo_usuario = 2;
		
       
		if(isNull($nombre,$usuario,$password,$con_password,$email)){
             
			$errors[]= '"Complete los campos"';
		}

		if(!isEmail($email)){
             
			$errors[]='"El correo no es valido"';
		}

		if(!validaPassword($password,$con_password)){
             
			$errors[]='"Las contraseñas no coinciden"';
		}
		if(usuarioExiste($usuario)){
			$errors[]='"El usuario $usuario ya existe"';
		}
		if(emailExiste($email)){
			$errors[]='"El correo $email ya existe"';
		}
		if(strlen(trim($password)) < 5){
			$errors[]='"La contarseña no valida 5 caracteres min"';
		}
		
		if(strlen(trim($nombre)) < 4 || strlen(trim($usuario)) < 4){
			$errors[]='"Asegurese que el nombre y el usuario se an correcrtos"';
		}

		if(count($errors) == 0){
	
                $pass_hash = hashPassword($password);
				$token = generateToken();
				$registro = registraUsuario($usuario, $pass_hash, $nombre, $email, $activo, $token, $tipo_usuario);

                if($registro > 0){
                   
                   $url = 'http://'.$_SERVER["SERVER_NAME"].'/Nemi/Public/login/activar.php?id='.$registro.'&val='.$token;

				   $asunto = 'Activa cuenta - sistemasd usuarios';
				   $cuerpo = "Hola $nombre haz click en el siguinete lik para activar ;) <a href='$url'>Activar cuenta</a>";

				   if(enviarEmail($email, $nombre, $asunto, $cuerpo)){
					 
					$errors[]="Hemos enviado un email a $email ";

					  echo "
					 Se ha Enviado en correo electronico a $email Para poder activar tu cuenta! 
					  <br><a href='index.php'>Inicia secion</a>";
					  exit;

				   }else{
					$errors[]='"El correo no se pudo enviar"';
				   }

				}else{
					$errors[]='"Error al registra"';
				}
		}
	
	}
	
?>