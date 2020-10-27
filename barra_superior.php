<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="busqueda_style.css">
</head>
<body> -->

<?php include ("config.php")?>
<div class="barra_superior">
            
        <div id="menu_img_barra">
            <a href=""><img src="imagenes/icons/options.svg" title="Menu"></a>
        </div>      
            
        <div id="input_container">
            <input type="text" id="input" value>
            <a href=""><img src="imagenes/icons/search.svg" id="input_img"></a>
        </div>

        <div id="barra_superior_loginsignin">
            <li id="barra_superior_loginsignin_login"> <a href="indexusuario.php"><?php echo $idioma['login']?></a> </li>
            <li id="barra_superior_loginsignin_signup"> <a href="indexsignup.php"><?php echo $idioma['singup']?></a> </li>
        </div>
    
        
        <div id="profile_img_barra">
            <button id="open-user">
                    
            <a ><img  src="imagenes/icons/settings.svg" alt=""></a>
            </button>
                        
            <button id="close-user">
                <a ><img  src="imagenes/icons/settings.svg" alt=""></a>
            </button>

        </div>        
</div>

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


