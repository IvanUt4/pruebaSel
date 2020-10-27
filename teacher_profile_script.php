<?php 
include 'DB.php';

$id = $_GET['id_teacher'];
echo $id;
$sql = "select * from maestro where id_maestro = $id";

$result = mysqli_query($db,$sql);

while ($consulta = mysqli_fetch_array($result)){
    $id = $consulta['id_maestro'];
    $nombre = $consulta['nombre_1']." ".$consulta['nombre_2']." ".$consulta['apellido_1']." ".$consulta['apellido_2'];
    $especialidad = $consulta['especialidad'];
    $email = $consulta['email'];
    $aplicacion1 = $consulta['aplicacion1'];
    $foto = $consulta['foto'];
}
$db->close();


include 'DB.php';
$sql = "select distinct habilidad from habilidades where id_maestro = $id";
$resultado_query = array ();
$resultado = mysqli_query($db,$sql);
while ($consulta = mysqli_fetch_array($resultado)){
    $resultado_query [] = $consulta['habilidad'];
}

?>
<div id='imagenes'>
    <img src="<?php echo $foto ?>" alt="" style="height: 10em;">
</div>

<div class='texto-redes'>
        <h3><?php echo $nombre; ?></h3>
        <?php
        foreach ($resultado_query as $key => $value) {
            echo "<h3>$value</h3>";
        }
        ?>
</div>



<div class='redes'>

        <a href="<?php echo $aplicacion1  ?>" target="_blank"><img src="imagenes/discord.png" alt="" style="height: 4em;"></a>
        <input type="text" value="<?php echo $email ?>" id="myInput" style='display: none;'>

<button onclick="myFunction()"><img src="imagenes/icons/mail.svg" alt="" style="height: 4em;"></button>
    
    
</div>

<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>