<?php
/**
 * Created by PhpStorm.
 * User: ae
 * Date: 06/01/2016
 * Time: 4:32
 */

if (isset($_GET['query'])){
    $query = $_GET['query'];

    retrieveData();

}else echo "error01";

function retrieveData(){
    global $query;

    print(
        "<div>".$query."</div></br>"
    );
    print(
        "<div>".$query."</div></br>"
    );
    print(
        "<div>".$query."</div></br>"
    );
    print(
        "<div>".$query."</div></br>"
    );
}

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>

</body>
</html>