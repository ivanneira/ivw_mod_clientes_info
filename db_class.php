<?php
/**
 * Created by PhpStorm.
 * User: ae
 * Date: 06/01/2016
 * Time: 4:15
 */

try{
    $mongo = new MongoClient();

}catch (Exception $e){
    echo "error02".parse_str($e);
}

class dbConnection{

    function search($query){

        global $mongo;

        $mongo->close(true);

        return "resulado";

    }

}

?>