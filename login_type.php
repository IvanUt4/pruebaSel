<?php include ("config.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login_type.css">
</head>
<body>
    <div class="main_container">
        <div class="main_container_son">
            <h3 class="tittle"> <?php echo $idioma["I'm"]?> </h3>
            
            <div class="id_container">
            <a href="login_usuario.php"><h4 class="text"><?php echo $idioma['Student']?></h4></a>
            <a href="login_maestro.php"><h4 class="text"><?php echo $idioma['Teacher']?></h4></a>
            </div>
        </div>
    </div>
</body>
</html>