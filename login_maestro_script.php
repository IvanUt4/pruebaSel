<?php
include ('DB.php');
session_start();
$email = '';
$pass = '';
$errors = array();
$_SESSION['verificar'] = false;

if(isset($_POST['login'])){
$email = $_POST['email'];
$pass = $_POST['pass'];

if (empty($email)) {
    array_push($errors, "Ingrese su correo electronico");
}
if(empty($pass)) {
    array_push($errors, "Ingrese la contraseña");
}


if (count($errors) === 0){
    $query = mysqli_query($db,"select * from maestro where email = '".$email."' and pass = '".$pass."'");
   $row = mysqli_fetch_assoc($query);
   $id = $row['id_maestro'];
   $username = $row['nombre_1'];
    /*
    $resultado_query = array();
    while ($consulta = mysqli_fetch_assoc($query)){

        $usuario [] = $consulta['nickname'];
        $id = $consulta['id_usuario'];
    }
*/

    $nr = mysqli_num_rows($query);
    $db->close();

    

    if($nr === 1){
    /* ?><br><?php */
    $_SESSION['username'] = $username;
    $_SESSION['id'] = $id;
    $_SESSION['rol'] = "maestro";
    $_SESSION['verificar'] = true;
    header("Location:TeacherView.php?id_teacher=".$_SESSION['id']);

    }
    elseif($nr === 0 ){
        header('Location:index.php');
        ?>
            <div class="error">
                <?php foreach ($errors as $error): ?>
                    <p><?php echo $error;?></p>
                <?php endforeach ?>
            </div>
        <?php
    }
    else{
    array_push($errors,'Correo electronico o contraseña incorrectos');
    }
};

}


?>