<?php
/**
 * Created by PhpStorm.
 * User: ae
 * Date: 06/01/2016
 * Time: 4:15
 */
include_once "connection.php";

//cambio de base de datos por mysql

try {
    $mySqlPDO = new PDO('mysql:host=' . $mySqlHost . ';dbname=' . $mySqlDb, $mySqlUser, $mySqlPass);
}catch (PDOException $e) {
    echo $e->getMessage();
}

function searchQuery($code,$query){

    global $searchCode;
    global $mySqlPDO;

    $tableName = false;

    foreach ($searchCode as $value) {

        if(isset($searchCode[$code])){
            $tableName = $searchCode[$code];
        }else $tableName = false;

    }

    if ($code) {
        //$mySqlQuery = "SELECT 'id' FROM 'client_".$code."' WHERE ".$code." LIKE '%".$query."%'";

        var_dump($code);
        var_dump($query);
        return  $mySqlQuery;

    }else return false;



}

?>