<?php
/**
 * Created by PhpStorm.
 * User: ae
 * Date: 06/01/2016
 * Time: 4:32
 */

if (isset($_POST["query"])){
    $query = $_POST["query"];

    var_dump($query);

}else echo "no se trajo ninguna string";


?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    Cliente buscado
</body>
</html>