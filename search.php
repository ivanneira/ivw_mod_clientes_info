<?php
/**
 * Created by PhpStorm.
 * User: ae
 * Date: 06/01/2016
 * Time: 4:32
 */

include_once 'db_class.php';

if (isset($_GET['query'])){
    $query = $_GET['query'];

    retrieveData();

}else echo "error01";

function retrieveData(){
    global $query;

    $searchClient = new dbConnection();

    $response = $searchClient->search($query);

    foreach($response as $document){
        print("<div>".var_dump($document)."</div></br>");
        print("<div id='gridFile'>".$document['name']."</div></br>");
    }

}



?>
