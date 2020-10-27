<?php 
include ("config.php"); 

$_SESSION['vista'] = $_GET['id_teacher']; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="teacher_profile.css">
</head>
<body>

<?php   include 'barra_superior.php';
        include 'barra_lateral.php';
?>

<div class='container'>
<?php   include 'teacher_profile_script.php';

?> 
<?php 
if(isset($_SESSION['rol'])){
    echo ('<form action="ScriptAgendar.php" id="form_register" method="post">');

    echo '<div class="formularios" id="datos_personales">';
      echo '<p>Dia sagrado</p>';
    echo '</div>';
    echo '<div class="formularios">';
    
    echo '<input type="date" id="fecha" name = "fecha" value="Fecha">';
    
    
    
    echo '</div>';
    echo '<button type="submit" value="" name="agendar">'.$idioma["Session_begin"].'</button>';
} else{
 echo "Debes estar logeado para agendar une session con el profesor";
}

?>

      
</form>
</div>

 
<div id="footer_imagen">
    <div id="float_left">
    <a href="index.php"><img src="imagenes/logo.png" title="Detlos"></a>
    </div>

    

    <div id="float_right">
    
    <a href="https://discord.gg/7s8TBe" target="_blank"><img src="imagenes/discord.png" alt=""></a>
    <a href="https://youtube.com" target="_blank"><img src="imagenes/youtube.png" alt=""></a>
    </div>
</div>
<script src="busqueda.js"></script>
</body>


</html>
