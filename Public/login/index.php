<?php
require 'Blackend/login.php';
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
    <link rel="stylesheet" href="../lib/alertifyjs/css/alertify.min.css">
    <link rel="stylesheet" href="stilos/style.css" />
    <title>Inicio sesión | Nemi</title>
  </head>
  <body>
  <div class="container"> <img src="./img/close.svg" alt="icon-close" class="icon iconn"> 
      <div class="forms-container"><img src="./img/close.svg" alt="icon-close" class="icon iconnn">
        <div class="signin-signup">
          
          <form class="sign-in-form" id="loginform"  role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
           
            
            <h2 class="title">Bienvenido a Nemi</h2>
            <h2 class="subtitlex">Por favor ingresa tus datos</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input id="usuario" type="text" class="form-control" name="usuario" type="text" placeholder="Correo o Usuario"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" type="password" name="password" type="password" placeholder="Contraseña" />
            </div>
            <a href="recupera.php">¿olvidaste la contraseña?</a>
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
  <script src="../lib/alertifyjs/alertify.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</html>

      <?php echo MensajesConfirmacio($errors); ?>
