<?php
include ("config.php");
if (!(isset($_SESSION['rol']))){
    header("Location:index.php");
}

if ($_SESSION['rol'] == 'maestro'){
    header("Location:TeacherView.php?id_teacher=".$_SESSION['id']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title><?php echo $_SESSION['id'];?></title>
    <link rel="stylesheet" href="home.css" type="text/css">
</head>
<body>



<div class="categorias_login_contenedor" >
    <img src="imagenes/logo.jpg"  alt="">
    <video autoplay muted loop id="myVideo" autoplay muted loop >
        <source src="imagenes/write.mp4" type="video/mp4">
    </video>
</div>
    


    <div class="barra_superior">
            
            <div id="menu_img_barra">
                <a href=""><img src="imagenes/icons/options.svg" title="Menu"></a>
            </div>      
                        
            <div id="input_container">
                <input type="text" id="input" value>
                <a href="busqueda.php"><img src="imagenes/icons/search.svg" id="input_img"></a>
            </div>
            
            <div id="barra_superior_loginsignin">
                <li id="barra_superior_loginsignin_login"> <a><?php echo $_SESSION['username'];?>  </a> </li>
               
            </div>
            
            <div id="profile_img_barra">
                <button id="open-user">  
                    <a ><img  src="imagenes/icons/user.svg" alt=""></a>
                </button>
                <button id="close-user">
                    
                    <a ><img  src="imagenes/icons/user.svg" alt=""></a>
                </button>
            </div>
            <!-- <button id="close"></button> -->
    </div>
    <!-- class="usuario_menu" -->
    <!-- <button class="modal-close" id="close">close</button> -->




      <!--ESTE ES ID OPTIONS -->
<!--       <button id="open">Sign up</button>
 -->
 
<?php
include 'barra_lateral.php';
?>









<div class="modal-body-user" id="modal-user">
        <div class="modal-user"  >
    
        
        <div id="lenguaje">
        <?php
            if($_SESSION['idioma'] == 'es'){
                echo ('<a href="index.php?idioma=en"><img src="imagenes/icons/uk.svg" alt=""></a>');
                echo ("<a href='index.php?idioma=en'>".$idioma['Language']."</a>");
                
            } elseif( $_SESSION['idioma'] == 'en'){
                echo ('<a href="index.php?idioma=es"><img src="imagenes/icons/mexico.png" alt=""></a>');
                echo ("<a href='index.php?idioma=es'>".$idioma['Language']."</a>");
                

            }
            
            ?>
        </div>
    
        <div id="dark">
            <a href=""><img src="imagenes/icons/moon.svg" alt=""></a>
            <a href=""><?php echo $idioma['dark_mode']; ?></a>
            <label class="switch">
            <input type="checkbox"><span class="slider round"></span>
            </label>
        </div>
    
        <div id="become_teacher">
            <a href="become_teacher.php"><img src="imagenes/icons/mail.svg" alt=""></a>
            <a href=""><?php echo $idioma['Become_master'];?></a>
            
        </div>
    
        <div id="help">
            <a href=""> <img src="imagenes/icons/help.svg" alt=""></a>
            <a href=""><?php echo $idioma['Help'];?></a>
            
        </div>
        <div id="exit">
            <a href="logout.php"><img src="imagenes/icons/exit.svg" alt=""></a>
            <a href=""><?php echo $idioma['Logout'];?></a>
        </div>
        
        </div>
    </div>
    

    


<!-- <div class="modal-backdrop-user"></div> -->
<!-- Si lo quitas no pasa nada -->


<?php include ('home_script.php') ?>
 



<div id="footer_imagen">
    <div id="float_left">
    <a href="index.php"><img src="imagenes/logo.png" title="Detlos"></a>
    </div>

    

    <div id="float_right">
    
    <a href="https://discord.gg/7s8TBe" target="_blank"><img src="imagenes/discord.png" alt=""></a>
    <a id="youtube" href="https://youtube.com" target="_blank"><img src="imagenes/youtube.png" alt=""></a>
    </div>
</div>



<footer>
    <p>&copy; 2020 Detlos.com<p>
    <p><a href="agradecimientos.php"><?php echo $idioma['Credits']?></a></p>

</footer>

</body>
</html>

<script src="home.js"></script>