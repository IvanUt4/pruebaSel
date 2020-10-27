<?php
include("DB.php");

$estrella = 1.5;
/* echo $estrella; */

// Guardar todos los valores en un araray de la consulta para tener las categoruias desde la base de datos
$k = 0;
$sql = "call select_categorias();";
$resultado_query = array();

$resultado = mysqli_query($db,$sql);
while ($consulta = mysqli_fetch_array($resultado)){
    $resultado_query [] = $consulta['especialidad'];
}
$db->close();
// Imprimir los valores

  
//Cuenta los resultados obtenidos para ponerlos como maximo en el random
$max =  count($resultado_query);

// Crea un random para recorrer el arreglo diferente
function UniqueRandomNumbersWithinRange($minimo, $maximo, $quantity) {
    $numbers = range($minimo, $maximo);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}

$array_randoms = ( UniqueRandomNumbersWithinRange(0,$max-1,$max) );

// Generar las tarjetas en home.php
for ($i = 0; $i <= $max-1; $i++){
// Variable de categorias que se redefine enc ada vuelta
$categoria_temp = $resultado_query[$array_randoms [$i]];

//  En cada vuelta consulta las subcategoria
include("DB.php");


$habilidad = array();
$nombre = array();

$sql2 = 'call select_habilidad("'.$categoria_temp.'");';
$resultado2 = array();
$resultado2 = mysqli_query($db,$sql2);
while ($consulta2 = mysqli_fetch_array($resultado2)){
    $id[] = $consulta2['id_maestro'];
    $habilidad [] = $consulta2['habilidad'];
    $nombre [] = $consulta2['nombre'];
    $puntuacion [] = $consulta2['valoracion'];  
    /* echo $consulta2 ['valoracion']; */
}
$online = count($nombre);
?>

<div id="main_teachers" >
    <div id='categoria1'>
        <h3 ><?php 
        switch ($categoria_temp) {
            case 'Base de datos':
                echo $idioma['Data_base'];
                break;
            case 'Diseño web':
                echo $idioma['Web_design'];
                break;
            case 'Calculo':
                echo $idioma['Calculus'];
                break;
            case 'Programacion':
                echo $idioma['Programming'];
                break;
            case 'Economia':
                echo $idioma['Economy'];
                break;
            case 'Arte':
                echo $idioma['Art'];
                break;
            case "Diseño":
                echo $idioma['Design'];
                break;
            case "portugués":
                echo $idioma['portugués'];
                break;
            case "electrónica":
                echo $idioma['Electronic'];
                break;
            case "Inglés":
                echo $idioma["English"];
                break;
            default:
                echo $categoria_temp;
                break;
        }
              
        
        ?></h3>
    </div><div class="grid" id="content">

<?php
// You can include a foreach and right/lef arrows method

for ($j = 0; $j <= 3; $j++){
$k = $k + $online;
?>
<div class="tarjeta"  style="background-image: url(imagenes/maestros/profile6.jpg)"><div class="texto_tarjeta">
<div><h5>

<?php
include("DB.php");
if (isset($nombre[$j])) {
    
    echo ('<a href = "profile.php?id_teacher='.$id[$j].'">'.$nombre[$j].' </a>');
   

}else{
    echo '<a href ="#">hola</a>';
}; 
?>

</h5><h5><?php
if (isset($habilidad[$j])) {
    echo $habilidad[$j]; 

    ?></h5></div>
<div class="abajo"><h5><img src="imagenes/estrellas/<?php echo $puntuacion [$j]; ?>.png" alt=""></h5><h5>
<?php 
}else{
    echo 'nel';
}


?>
<img id="green_dot" src="imagenes/icons/greendot.png" alt=""><?php echo $online?></h5></div>
</div></div>
<?php
}
unset($puntuacion);
?>

</div>
</div>
<?php
};



?>