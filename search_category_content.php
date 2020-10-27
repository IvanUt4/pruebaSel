<?php
include 'DB.php';

// Guardar todos los valores en un araray de la consulta para tener las categoruias desde la base de datos

// Jala la variable desde el import, SI NO PUEDES CON LAS COMILLAS CONCATENA
$sql='call select_habilidad("'. $_GET['clase'].'");'; 
$sql_result = array();

$resultado = mysqli_query($db,$sql);
while ($consulta = mysqli_fetch_row($resultado)){
       
    $sql_result [] =  array(
        'id_maestro' => $consulta[0], 'especialidad' => $consulta[1],
        'nombre' => $consulta[2]); 
}

// Con esto se puede comprobar en el navegador

$db->close();


/* echo $_GET['clase']; */

foreach ($sql_result as $key => $value) {

?>
            <div id="tarjeta" class='contador' style="background-image: url(imagenes/maestros/profile2.png)"><div class="texto_tarjeta">
            <div><h5>
            <?php echo($sql_result[$key] ['nombre']); ?>
            </h5><h5>
            <?php  echo($sql_result[$key] ['especialidad']); ?>
            </h5></div>
            <div class="abajo"><h5><img src="imagenes/estrellas/cinco_estrellas(1).png" alt=""></h5><h5>
            <img id="green_dot" src="imagenes/icons/greendot.png" alt="">
            <?php echo count($sql_result);?>
            </h5></div>
            </div></div>
<?php
}

?>