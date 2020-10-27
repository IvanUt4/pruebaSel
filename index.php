<?php
include ("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title><?php echo $idioma['title'];?></title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>

<?php include('save_json_last.php');?>

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
                <?php
                if (isset($_SESSION['rol'])){
                    echo ("<li id='barra_superior_loginsignin_login'> <a>".$_SESSION['username']."</a> </li>");
                } else{
                   echo ("<li id='barra_superior_loginsignin_login'> <a href='login_type.php'>".$idioma['login']."</a> </li>");
                echo ("<li id='barra_superior_loginsignin_signup'> <a href='register_usuario.php'>".$idioma["singup"]."</a> </li>");
                
                }
                ?>
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
    <div class="modal" id="modal">
    <div class="modal-backdrop"></div>
    <div class="modal-body">
    <button class="modal-close" id="close">
        <img src="imagenes/icons/exit.svg" alt="">
    </button>
    <br>
    
    <a href=""><p><?php echo $idioma['FAQ'];?></p></a>
    <a href=""><p><?php echo $idioma['Who_we_are'];?></p></a>
    <a href=""><p><?php echo $idioma['Other'];?></p></a>
    <a href=""><p><?php echo $idioma['Opcion'];?></p></a>
    <a href=""><p><?php echo $idioma['Here'];?></p></a>
    </form>
</div></div>











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
            <a href="edit_user.php"><?php echo $idioma['Help'];?></a>
            
        </div>
        <div id="exit">
            <a href="logout.php"><img src="imagenes/icons/exit.svg" alt=""></a>
            <a href=""><?php echo $idioma['Logout'];?></a>
        </div>
        
        </div>
    </div>
    

    



<!-- <div class="modal-backdrop-user"></div> -->
<!-- Si lo quitas no pasa nada -->


<div id="main_teachers" >
    <div class="grid" id="content">

    
    </div>
</div>

<!-- <div class="segundo-item">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, accusamus? Sint modi natus maiores esse, quas voluptatem aperiam voluptate. Alias delectus sapiente ex dicta possimus, voluptatum est minus non odio.
</div> -->


<div id="footer_imagen">
    <div id="float_left">
    <a href="index.php"><img src="imagenes/logo.png" title="Detlos"></a>
    </div>

    

    <div id="float_right">
    
    <a href="https://discord.gg/7s8TBe" target="_blank"><img src="imagenes/discord.png" alt=""></a>
    <a id="youtube" href="https://youtube.com" target="_blank"><img src="imagenes/youtube.png" alt=""></a>
    </div>
</div>

<div class="caracteristicas">
    <div class="caracteristicas-container">
    
    <div class="caracteristicas-1">
    <h4><?php echo $idioma['how_works'];?></h4>
    <p> <?php echo $idioma['Description'];?></p>
    </div>
    
    <div class="caracteristicas-2">
    <h4><?php echo $idioma['2Block'];?></h4>
    <div class="caracteristicas-3-grid">
    <p><?php echo $idioma['Everywhere'];?></p>
    <div id="locationcontainer">
    <img src="imagenes/icons/where.svg" alt="">
    </div></div></div>

    <!-- Aprovecha tu tiempo desde casa
    Resuelve tus dudas de una forma simple
    Decide cuando lo quieres resolver -->

    
    
    
    <div class="caracteristicas-3">
    <h4><?php echo $idioma['1Block'];?></h4>
    <div class="caracteristicas-3-grid">
    <p><?php echo $idioma['Flex'];?></p>
    <div id="timecontainer">
    <img src="imagenes/icons/time.svg" alt="">
    </div></div></div>



    <div class="caracteristicas-4">
    <h4><?php echo $idioma['3Block'];?></h4>
    <div class="caracteristicas-3-grid">
    <p><?php echo $idioma['Interactive'];?></p>
    <div id="video_icon_caracteristicas">
    <img src="imagenes/icons/video.svg" alt="" >
    </div></div></div>

</div>
</div>

<footer>
    <p>&copy; 2020 Detlos.com<p>
    <p><a href="agradecimientos.php"><?php echo $idioma['Credits'];?></a></p>

</footer>

</body>
</html>

<script src="index.js"></script>