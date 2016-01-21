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

        $stringQuery = array_shift($codeExploded);


    }else{
        $code = false;
        $stringQuery = $query;
    }



    function searchQuery($code,$searchQuery){

        $dbConnection = new db_access();
        $result = false;

        //en caso que tenga código
        if($code){

            switch($code){
                case ':na':
                    $result = $dbConnection->getName($searchQuery);
                    break;
                case ':co':
                    $result = $dbConnection->getCode($searchQuery);
                    break;
                case ':ip':
                    $result = $dbConnection->getIp($searchQuery);
                    break;
                case ':ad':
                    $result = $dbConnection->getAddress($searchQuery);
                    break;
                default:
                    $result = false;
            }

        //en caso que NO tenga código
        }else{
            $result = array_merge($dbConnection->getName($searchQuery),
                                    $dbConnection->getIp($searchQuery),
                                    $dbConnection->getAddress($searchQuery),
                                    $dbConnection->getCode($searchQuery)
                                );
        }

        return $result;
    }
    //hacer que devuelva un id y no los rows, y que los rows los devuelva una función

    $response = searchQuery($code,$stringQuery);


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

            print("</tr>");

        }






    }catch(Exception $e){
        echo "error03";
        var_dump($e);
    }


    print("
        </tbody>
        </table>
    ");




?>
