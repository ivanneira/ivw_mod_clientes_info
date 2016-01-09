<?php
/**
 * Created by PhpStorm.
 * User: ae
 * Date: 06/01/2016
 * Time: 4:15
 */
include_once "connection.php";

// Clase MongoClient está obsoleta, en su lugar se usa mongodb driver manager
// no se implementa por dificultad para instalarlo en xampp


try{
    $mongo = new MongoClient();
    $db = $mongo->selectDB($dataBaseName);
    $collection = $db->selectCollection($collectionName);

}catch (MongoConnectionException $e){
    echo "error02";

}


class dbConnection{

    function search($query){

        global $mongo;
        global $collection;

        $cursor = $collection->find(array('name'=>$query));

        if($mongo){
            $mongo->close(true);

            return $cursor;
        } else return "error02";

    }

}

?>