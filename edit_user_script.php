<?php
include("DB.php");
      

    session_start();
    if (!(isset($_SESSION['rol']))){
        header("Location:index.php");
    }
    
    $sql = 'select * from usuario where id_usuario = '.$_SESSION['id'];
    $resultado = mysqli_query($db,$sql);
    while ($consulta = mysqli_fetch_array($resultado)){
        $resultado_query [1] = $consulta['email'];
        $resultado_query [2] = $consulta['pass'];
        $resultado_query [3] = $consulta['nickname'];
    }


    $username = $resultado_query [1];
    $email = $resultado_query [2];
    $password = $resultado_query [3];
    $errors = array();
    
        
    
    //Connecto to the database
    //Event listener
    if(isset($_POST['register'])){
        
        
        $username = ($_POST['username']);
        $email =  ($_POST['email']);
        $password_1 = ($_POST['password_1']);
        $password_2 = ($_POST['password_2']);
    
        //ensure that form fields are filled properly
        if (empty($username)) {
            array_push($errors, "Ingrese un nombre de usuario");
        }

        if (empty($email)) {
            array_push($errors, "Ingrese un correo electronico");
        }
        
        if (empty($password_1)) {
            array_push($errors, "Ingrese una contraseña");
        }

        if (empty($password_2)) {
            array_push($errors, "Ingrese una contraseña");
        }
        
        if ($password_1 !== $password_2) {
            array_push($errors, "Las contrasenas no coinciden");
        }
        
    
        //If there are no errors, update the user
        if (count($errors) === 0){
            
            /* $password = md5($password_1); //Encrypt password */
            $sql2 = "call update_usuario("."'".$_SESSION['id']."'".",'$email'".",'$password_1'".",'$username')";
            
            mysqli_query($db, $sql2);
           
        }
        ?>
        
        <div class="error">
            <p><?php echo 'Vuelve a intentarlo'; ?></p>
        </div>
        <br>


        <?php
        


        }

        
?>