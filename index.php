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
            <span class="sr-only">Cambiar navegación</span>
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

<!--
<body>

    <div id="header" class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <i class="icon-reorder"></i>
            </button>
            <a class="navbar-brand" href="index.php">
                Clientes
            </a>
        </div>

    </div>
    <div id="wrapper">
        <div id="sidebar-wrapper" class="col-md-1">
            <div id="sidebar">
                <ul class="nav list-group">
                    <li>
                        <a class="list-group-item" id="btn_search"><i class="icon-home icon-1x"></i>Buscar</a>
                    </li>
                    <li>
                        <a class="list-group-item" id="btn_add"><i class="icon-home icon-1x"></i>Agregar</a>
                    </li>
                    <li>
                        <a class="list-group-item" id="btn_remove"><i class="icon-home icon-1x"></i>Eliminar</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="main-wrapper" class="col-md-11 pull-right">
            <div id="main">
                <div class="page-header">
                    <h3>Buscar</h3>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor illum incidunt iste optio praesentium sint totam. Aperiam commodi dicta nemo nesciunt pariatur quaerat repudiandae tempora voluptatibus? Adipisci facere molestiae rem?</p>
                <div class="page-header">
                    <h3>Agregar</h3>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci aliquam animi architecto asperiores, at commodi consequuntur cumque delectus deserunt dolorum esse harum in, iste modi, qui soluta totam voluptatibus.</p>
                <div class="page-header">
                    <h3>Eliminar</h3>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque dolore eum molestiae. Dicta dolores eaque fugit officia quam qui, quo sapiente soluta voluptate voluptates. Enim nobis pariatur quos totam veritatis.</p>
            </div>
        </div>
    </div>
</body>

    -->

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

        /*
        //redirección de los botones de navegación lateral
        $("#btn_search").click(function(){
            $("#main").load("search.html");
        });
        $("#btn_add").click(function(){
            $("#main").load("add.html");
        });
        $("#btn_remove").click(function(){
            $("#main").load("remove.html");
        });
        */
    </script>


</body>
</html>