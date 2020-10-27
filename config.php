<?php
session_start();
if (!isset($_SESSION['idioma'])){
    $_SESSION['idioma'] = "es";
} else if(isset($_GET['idioma']) && $_SESSION['idioma'] != $_GET['idioma'] && !empty($_GET['idioma'])){
if ($_GET['idioma'] == "es"){
    $_SESSION['idioma'] = "es";
} else if ($_GET['idioma'] == "en"){
    $_SESSION['idioma'] = "en";
}
}
// echo "Escoge el lenguaje: ".$_SESSION['idioma'];
require_once"traducciones/".$_SESSION['idioma'].".php";
?>