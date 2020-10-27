<?php 
include 'DB.php'; //lo puedes importar tambien con una variable;

$sql="select * from maestro"; 
$sql_result = array();

$resultado = mysqli_query($db,$sql);
while ($consulta = mysqli_fetch_row($resultado)){

    $sql_result []=  array(
        'id_maestro' => $consulta[0], 'nombre_1' => $consulta[4], 'nombre_2' => $consulta[5],
        'apellido_1' => $consulta[6] , 'apellido_2' => $consulta[7], 'especialidad' => $consulta[8],
        'valoracion' => $consulta[9], 'num_sesiones' => $consulta[10]); 
}

// Con esto se puede comprobar en el navegador

/* print_r($sql_result);
print_r($sql_result[0]); */
$db->close();

// Guarda los valores del array en un JSON la opcion 'w' es para write
$fp = fopen('teachers.json', 'w');
fwrite($fp, json_encode($sql_result));
fclose($fp);
?>