<?php
include 'DB.php';

// Guardar todos los valores en un araray de la consulta para tener las categoruias desde la base de datos
// If is set
$sql = "call select_categorias();";

$resultado_query = array();

$resultado = mysqli_query($db,$sql);
while ($consulta = mysqli_fetch_array($resultado)){
    $resultado_query [] = $consulta['especialidad'];
}

/* print_r($resultado_query); */
$db->close();
?>

<div class="modal" id="modal">
    <div class="modal-backdrop"></div>
<div class="modal-body">
    <button class="modal-close" id="close">
    <img src="imagenes/icons/exit.svg" alt="">
    </button>
    <br>


    
<?php
foreach ($resultado_query as $key => $value) {
    ?>
    <a href="search_category.php?clase=<?php echo $resultado_query[$key];?>"><p>
    <?php 
    switch ($resultado_query[$key]) {
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
            echo $resultado_query[$key];
            break;
    }
    
    // echo $resultado_query[$key];?>
    </p></a>    
<?php
}




?>
</div></div>
</form>