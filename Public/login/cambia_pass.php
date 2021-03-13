<?php
	require 'Blackend/Cambiarpass.php';
	
?>

<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cambiar Password</title>
    <link rel="stylesheet" href="stilos/style.css" />
	<script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
		
	</head>
	<body>
	<div class="container"> <img src="./img/close.svg" alt="icon-close" class="icon iconn"> 
      <div class="forms-container"><img src="./img/close.svg" alt="icon-close" class="icon iconnn">
        <div class="signin-signup">
          
        <form id="loginform" class="form-horizontal" role="form" action="guarda_pass.php" method="POST" autocomplete="off">
		
		<input type="hidden" id="user_id" name="user_id" value ="<?php echo $user_id; ?>" />				
	   <input type="hidden" id="token" name="token" value ="<?php echo $token; ?>" />
            
            <h2 class="title">Cambia la contraseña</h2>
            <h2 class="subtitlex">Por favor ingresa los nuevos datos</h2>
            <div class="input-field">
			<i class="fas fa-lock"></i>
              <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
			  <input type="password" class="form-control" name="con_password" placeholder="Confirmar Password" required>
            </div>
           <input type="submit" class="btn" value="Incia Sesión" />
          </form>

      
        </div>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3 id="wh"> ¿Nuevo por estos rumbos?</h3>
            <pre class="p">
            ¿Buscas conectarte con la madre tierra y quieres relajarte un poco?
            Encuentra espacios verdes para visitar, ¿Qué esperas?
              
            </pre>
            <button class="btn transparent" id="sign-up-btn" onclick="location.href='./registro.php'">
              Registrarse
            </button>
          </div>
          <img src="img/undraw_thoughts_e49y.svg" class="image" alt="" />
        </div>
       
  </body>
 </html>

     

	
	
