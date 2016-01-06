<?php
/**
 * Created by PhpStorm.
 * User: ae
 * Date: 06/01/2016
 * Time: 4:06
 */
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Información de clientes</title>

    <script src="jquery-2.1.4.min.js" type="text/javascript"></script>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<button id="search">busqueda</button>
<button id="add">ingresar</button>
<button id="remove">eliminar</button>

<script>
    $("#search").click(function(){
        window.location.href ="search.php";
    });

    $("#add").click(function(){
        window.location.href ="add.php";
    });

    $("#remove").click(function(){
        window.location.href ="remove.php";
    });
</script>

</body>
</html>