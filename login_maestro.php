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
      <h1><?php echo $idioma['Login_button']?></h1>
      <form action="login_maestro_script.php" method="post">

        <label for="Correo electronico"><?php echo $idioma['Put_email']?></label>
        <input type="text" name = "email" placeholder="<?php echo $idioma['email']?>" autocomplete="email">
       
        <label for="contraseña"><?php echo $idioma['Password']?></label>
        <input type="password" name = "pass" placeholder="<?php echo $idioma['Password_place']?>" autocomplete="current-password">
        
        <button type="submit" value="register" name="login">Log In</button>

              <div class="recordatorios">
            </div>
      </form>
    </div>


  </body>
</html>