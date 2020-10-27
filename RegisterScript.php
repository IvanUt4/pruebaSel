<?php
include("DB.php");
    //conect to database
    $username = "";
    $email = "";
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

        //If there are no errors, sabe the user to database
        if (count($errors) === 0){
            //$password = md5($password_1); //Encrypt password
            $sql = "call insert_usuario('$password_1','$username','$email')"; //NEED TO ADD EMAIL TO DATABASE!
            mysqli_query($db, $sql);
            header('Location:welcome.php');
        };


        }

?>