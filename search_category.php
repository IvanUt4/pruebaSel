<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="busqueda_style.css">
</head>
<body>

<?php
include 'barra_superior.php';
include 'barra_lateral.php';
?>

<div id="flex">
    <div class="grid" id="grid">

    <?php
    include 'search_category_content.php';
    ?>

    </div>
</div>

<?php
include 'footer.php';
?>

</body>
<script src="search_category.js"></script>

</html>
