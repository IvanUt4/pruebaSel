<?php include('config.php')?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="signup.css">
  </head>
  <body>

    <div class="background ">
      <div class="blur"></div>
    </div>
    
    <div class="login-box">
      
      <a href="index.php"><img src="imagenes/logo.png" class="avatar" alt="" href ></a>
  
      <h1><?php echo $idioma['Register'];?></h1>

        <form action="register_usuario.php" id="form_register" method="post">

          <?php include('errors.php');?>
      
          <label for="Nombre de usuario"><?php echo $idioma['Username']?></label>
          <input type="text" placeholder="<?php echo $idioma['Password_place']?>" name="username">
        
          <label for="Nombre de usuario"><?php echo $idioma['email']?></label>
          <input type="text" placeholder="juanito123@gmail.com" name="email">

          <label for="contraseña"><?php echo $idioma['Password']?></label>
          <input type="password" name="password_1" placeholder="<?php echo $idioma['Password_place']?>" autocomplete="current-password" >

          <label for="contraseña"></label>
          <input type="password" name="password_2" placeholder="<?php echo $idioma['Re_pass']?>" autocomplete="current-password">
          
<!--
          <div class="formularios" id="datos_personales">
            <p>Fecha de nacimiento</p>
          </div>
          <div class="formularios">
          
          <input type="date" id="fecha" value="Fecha">
        
          
         
          </div>
-->
          <button type="submit" value="register" name="register"><?php echo $idioma['Register']?></button>
                <div class="recordatorios">
                  
                <a href="indexusuario.php"><?php echo $idioma['No_account']?></a>
              </div>
        </form>
        

    </div>
  </body>
</html>

