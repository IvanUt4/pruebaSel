<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="welcome.css">
</head>
<body>

<div class="barra_superior">
            
        <div id="menu_img_barra">
            <a href=""><img src="imagenes/icons/options.svg" title="Menu"></a>
        </div>      
            
        <div id="input_container">
            <input type="text" id="input" value>
            <a href=""><img src="imagenes/icons/search.svg" id="input_img"></a>
        </div>

        <div id="barra_superior_loginsignin">
            <li id="barra_superior_loginsignin_login"> <a href=" login_usuario.php">Log In</a> </li>
            <li id="barra_superior_loginsignin_signup"> <a href="login_usuario.php">Sign Up</a> </li>
            <!-- Aqui se repite el Login Usuario por que se supone que ya esta registrado -->
        </div>
    
        
        <div id="profile_img_barra">
            <button id="open-user">
                    
            <a ><img  src="imagenes/icons/user.svg" alt=""></a>
            </button>
                        
            <button id="close-user">
                <a ><img  src="imagenes/icons/user.svg" alt=""></a>
            </button>

        </div>        
</div>

<div class="modal-body-user" id="modal-user">
    <div class="modal-user">

    
    <div id="lenguaje">
        <a href=""><img src="imagenes/icons/uk.svg" alt=""></a>
        <a href="">Lenguaje</a>
    </div>

    <div id="dark">
        <a href=""><img src="imagenes/icons/moon.svg" alt=""></a>
        <a href="">Modo obscuro</a>
        <label class="switch">
        <input type="checkbox"><span class="slider round"></span>
        </label>
    </div>

    <div id="become_teacher">
        <a href="become_teacher.php"><img src="imagenes/icons/mail.svg" alt=""></a>
        <a href="">Ser maestro</a>
        
    </div>

    <div id="help">
        <a href=""> <img src="imagenes/icons/help.svg" alt=""></a>
        <a href="">Ayuda</a>
        
    </div>
    <div id="exit">
        <a href=""><img src="imagenes/icons/exit.svg" alt=""></a>
        <a href="">Salir</a>
    </div>
    
    </div>
</div>

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
    <a href=""><p>Opcion</p></a>
    <a href=""><p>Opcion</p></a>
    <a href=""><p>Opcion</p></a>
    <a href=""><p>Opcion</p></a>
    <a href=""><p>Opcion</p></a>
    <a href=""><p>Opcion</p></a>
    <a href=""><p>Opcion</p></a>
    <a href=""><p>Opcion</p></a>

</form>
</div></div>


<div class='greetings'>
<h3>Bienvenido Meco123!</h3>
<h3><a href="login_type.php">Inicia Sesion</a></h3>
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
