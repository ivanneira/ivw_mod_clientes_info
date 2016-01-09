<?php
/**
 * Created by PhpStorm.
 * User: ae
 * Date: 06/01/2016
 * Time: 4:32
 */

include_once 'db_class.php';

if (isset($_GET["query"])){
    $query = $_GET["query"];
    retrieveData();

}else echo "error01";

function retrieveData(){
    global $query;

    $searchClient = new dbConnection();

    $response = $searchClient->search($query);

    //¿sería mejor incluirla en la clase de base de datos?
    //insertar validacion de llegada

    print("
    <table class='table table-striped table-bordered table-hover table-condensed' >
        <thead>
            <tr>
                <td><b>código</b></td>
                <td><b>nombre</b></td>
                <td><b>ip</b></td>
                <td><b>dirección</b></td>
                <td><b>teléfono</b></td>
        </thead>
        <tbody>

    ");


    foreach($response as $document){

        print("<tr>");

            print("<td>".$document['code'] ."</td>");
            print("<td>".$document['name'] ."</td>");
            print("<td>".$document['ip'] ."</td>");
            print("<td>".$document['address']['street'] ."</td>");
            print("<td>".$document['tel'] ."</td>");

        print("</tr>");


        /*
        print("<div id='gridFile'>".$document['code']."</div>");
        print("<div id='gridFile'>".$document['name']."</div>");
        print("<div id='gridFile'>".$document['ip']."</div>");
        print("<div id='gridFile'>".$document['address']['street']."</div>");
        print("<div id='gridFile'>".$document['address']['city']."</div>");
        print("<div id='gridFile'>".$document['tel']."</div></br>");
        */

    }

    print("
        </tbody>
        </table>
    ");

}



?>
