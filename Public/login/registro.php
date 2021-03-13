<?php
	require 'Blackend/registro.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="stilos/style.css" />
    <link rel="stylesheet" href="../lib/alertifyjs/css/alertify.min.css">
    <link  id=login rel="import" href="index.php" />
    <title>Registro | Nemi</title>
  </head>
  <body>
    
     <div class="container"> <img src="./img/close.svg" alt="icon-close" class="icon iconn"> 
      <div class="forms-container"><img src="./img/close.svg" alt="icon-close" class="icon iconnn">
        <div class="signin-signup">
          
		<form id="signupform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
            <h2 class="title">Registro Nemi</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nombre" name="nombre"/>
            </div>
            
             <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Usuario" name="usuario"/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Correo" name="email"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" name="password" />
            </div>
             <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Repetir Contraseña" name="con_password"/>
            </div>
            <input type="submit" class="btn" value="Registrarse" />

          </form>

        </div>
      </div>
       <div class="panels-container">
        <div class="panel left-panel">
           <div class="content">
            <h3>¿Ya posees una cuenta?</h3>
            <pre class="p">
              Entonces inicia sesión.
            </pre>
            <button onclick="location.href='./index.php'" class="btn transparent" id="sign-in-btn">
              Sacame de aqui
            </button>
          <img src="img/bike.svg" class="image" alt="" />
        </div>

  </body>
  <script src="../lib/alertifyjs/alertify.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</html>

      <?php echo MensajesConfirmacio($errors); ?>

														