<?php 

include ("config.php");

if (isset($_SESSION['rol'])){
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>

    <div class="background">
      <div class="blur"></div>
    </div>
    
   
    
    <div class="login-box">
      
      <a href="index.php"><img src="imagenes/logo.png" class="avatar" alt="" href ></a>
      <h1><?php echo $idioma['login'];?></h1>
      <form action="LoginScript.php" method="post">

        <label for="Nombre de usuario"><?php echo $idioma['Username'];?></label>
        <input type="text" name = "nombreUsuario" placeholder="<?php echo $idioma['Username_place'];?>" autocomplete="email">
       
        <label for="contraseña"><?php echo $idioma['Password'];?></label>
        
        <input type="password" name = "pass" placeholder="<?php echo $idioma['Password_place'];?>" autocomplete="current-password">
        
        <button type="submit" value="register" name="login"><?php echo $idioma['Login_button'];?></button>

              <div class="recordatorios">
              <a href="#"><?php echo $idioma['Lost_pass'];?></a><br>
              <a href="indexsignup.php"><?php echo $idioma['No_account'];?> </a>
            </div>
      </form>
    </div>


  </body>
</html>