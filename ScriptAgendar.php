<?php
include("DB.php");
session_start();
if($_SESSION['rol'] != 'usuario'){
    header("Location:index.php");
}

$fecha = $_POST['fecha'];
$usuario = $_SESSION['id'];
$maestro = $_SESSION['vista'];
$sql = ("call transaction_insert_sesion('$usuario', '$maestro',5,'$fecha',true)");
mysqli_query($db,$sql);
header("Location:home.php");
?>