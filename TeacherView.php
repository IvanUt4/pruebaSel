<?php include ("config.php"); 
if($_SESSION['id'] != $_GET['id_teacher']){
    header("Location:TeacherView.php?id_teacher=".$_SESSION['id']);
}
if($_SESSION['id'] < 1000){
  header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<h1><?php echo $idioma['Welcome']?> <?php echo $_SESSION['username'];
?></h1> 


<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col"><?php echo $idioma['Id_session']?></th>
      <th scope="col"><?php echo $idioma['Id_user']?></th>
      <th scope="col"><?php echo $idioma['Userame_s']?></th>
      <th scope="col"><?php echo $idioma['Date']?></th>
    </tr>
  </thead>
  <tbody>
    <?php
    include ("DB.php");
    $id = $_GET['id_teacher'];
    $query = mysqli_query($db,"select S.id_sesion,S.usuario,U.nickname,S.fecha  from sesion as S,usuario as U where S.maestro =$id and U.id_usuario= S.usuario order by S.fecha desc");
    //$query = mysqli_query($db,"select * from sesion where maestro =" .$id);
    while ($result = mysqli_fetch_assoc($query)){
    $numero = $result['id_sesion'];
    $usuario = $result['usuario'];
    $nombre = $result['nickname'];
    $fecha = $result['fecha'];

    $tabla = "
    <tr>
    <td>$numero</td>
    <td>$usuario</td>
    <td>$nombre</td>
    <td>$fecha</td>
    </tr>
    ";
    echo $tabla;
    }
    ?>
  </tbody>
</table>









<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>