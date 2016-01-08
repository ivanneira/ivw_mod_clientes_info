<?php
/**
 * Created by PhpStorm.
 * User: ae
 * Date: 06/01/2016
 * Time: 4:15
 */
include_once "connection.php";

try{
    $mongo = new MongoClient();
    $db = $mongo->selectDB($dataBaseName);
    $collection = $db->selectCollection($collectionName);

}catch (Exception $e){
    echo "error02";
    var_dump($e);
}

class dbConnection{

    function search($query){

        global $mongo;
        global $collection;

        if($mongo){
            $mongo->close(true);
            try {
                $cursor = $collection->find(array('$in' => array('name' => 'Cliente')));
            }catch (Exception $e){
                echo "error";
                var_dump($e);
            }



            return "resulado";
        } else return "error02";

    }

}

?>