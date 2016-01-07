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

    $searchClient = new db_connection();

    $response = $searchClient->search($query);

    print("<div>".$response."</div>");
}



?>
