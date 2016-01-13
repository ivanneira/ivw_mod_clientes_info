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

    function search($searchCode,$query){

        global $mongo;
        global $collection;

        $searchArray  = array('name' => array('$regex'=> new MongoRegex('/'.$query.'/i')) );

        /*
        switch($searchArray){
            case '': $searchArray  = array('name' => array('$regex'=> new MongoRegex('/'.$query.'/i')) );
                break;

        }
*/
        $searchArray  = array('name' => array('$regex'=> new MongoRegex('/'.$query.'/i')) );

        $cursor = '';

        try {
            $cursor = $collection->find($searchArray);
        }catch (MongoException $e){
            echo 'error04';
            var_dump($e);
        }
        if($mongo){
            $mongo->close(true);

            return $cursor;
        } else return "error02";

    }

}

?>