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

}else echo "error01";

//trata la string para detectar y separar la query
$code= false;
$searchTerms = false;
$result = false;

$codeExploded = explode(' ',$query);

    //en caso de que tenga código
    if(substr($query,0,1) == ':'){

        $code = $codeExploded[0];

        array_shift($codeExploded);

    }else{
        $code = false;
    }

    var_dump(searchQuery($code,$codeExploded));

/*
function printData(){

    global $code;
    global $codeExploded;

    $response =


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

    try {


        foreach($response as $document){

            print("<tr>");

            print("<td>".$document['code'] ."</td>");
            print("<td>".$document['name'] ."</td>");
            print("<td>".$document['ip'] ."</td>");
            print("<td>".$document['address']['street'] ."</td>");
            print("<td>".$document['tel'] ."</td>");

            print("</tr>");

        }






    }catch(MongoCursorException $e){
        echo "error03";
        var_dump($e);
    }


    print("
        </tbody>
        </table>
    ");

}

*/

?>
