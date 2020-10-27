<?php
include ('DB.php');
session_start();
$usuario = '';
$pass = '';
$errors = array();
$_SESSION['verificar'] = false;

if(isset($_POST['login'])){

$usuario = $_POST['nombreUsuario'];
$pass = $_POST['pass'];

if (empty($usuario)) {
    array_push($errors, "Ingrese un nombre de usuario");
}
if(empty($pass)) {
    array_push($errors, "Ingrese la contraseña");
}



if (count($errors) === 0){
    $query = mysqli_query($db,"select * from usuario where nickname = '".$usuario."' and pass = '".$pass."'");
    $result = mysqli_fetch_assoc($query);
    $nr = mysqli_num_rows($query);
    if($nr === 1){
        /* ?><br><?php */
    $_SESSION['username'] = $usuario;
    $_SESSION['id'] = $result['id_usuario'];
    $_SESSION['rol'] = "usuario";
    $_SESSION['verificar'] = true;
    header("Location:home.php");
    //header('Location:home.php');
    } elseif($nr > 1){
        echo "Usuario duplicado";
    }
    elseif($nr === 0 ){
        header('Location:index.php');
    }
    else{
    array_push($errors,'Nombre de usuario o contraseña incorrectos');
    }
};

}



?>


<?php 


if(count($errors) > 0): ?>
    <div class="error">
        <?php foreach ($errors as $error): ?>
            <p><?php echo $error;?></p>
        <?php endforeach ?>
    </div>
<?php endif;?>