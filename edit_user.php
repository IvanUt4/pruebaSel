<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edita tus datos</title>
    <link rel="stylesheet" href="signup.css">
  </head>
  <body>

    <div class="background ">
      <div class="blur"></div>
    </div>
    
    <div class="login-box">
      
      <a href="index.php"><img src="imagenes/logo.png" class="avatar" alt="" href ></a>
  
      <h1>Edita tus datos</h1>
      <?php include('edit_user_script.php');?>

      <form action="edit_user.php" id="form_register" method="POST">          
      
          <label for="Nombre de usuario">Nombre de usuario</label>
          <input type="text" name="username" value='<?php echo $username?>'>
        
          <label for="Nombre de usuario">Correo electronico</label>
          <input type="text" name="email" value='<?php echo $email?>'>

          <label for="contraseña">Contraseña</label>
          <input type="password" name="password_1" value="<?php echo $password?>">

          <label for="contraseña"></label>
          <input type="password" name="password_2"  value="<?php echo $password?>">
          

          <button id='red' type="submit"  name="register">Cambiar datos</button>
                <div class="recordatorios">

              </div>
        </form>
        
        

    </div>
  </body>
</html>

