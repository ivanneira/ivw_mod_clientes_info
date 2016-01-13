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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>clientes</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">


</head>

<body>

<div class="page-header">
    <h2>IVW <small>gestión de clientes</small></h2>
</div>

<nav class="navbar navbar-default">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">cambiar navegación</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <p class="navbar-brand">menú clientes</p>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li id="btn_menu_search"> <a href="#">buscar</a></li>
            <li id="btn_menu_add"> <a href="#">agregar</a></li>
            <li id="btn_menu_remove"> <a href="#">borrar</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    <div id="ajax_main_container"></div>
</div>


    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>

        $("#btn_menu_search").click(function(){

            $.get("search.html",function(data){
               $("#ajax_main_container").html(data);
            });
        });

        $("#btn_menu_add").click(function(){

            $.get("add.html",function(data){
                $("#ajax_main_container").html(data);
            });
        });

        $("#btn_menu_remove").click(function(){

            $.get("remove.html",function(data){
                $("#ajax_main_container").html(data);
            });
        });

    </script>


</body>
</html>