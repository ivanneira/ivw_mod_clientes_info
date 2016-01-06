<?php
/**
 * Created by PhpStorm.
 * User: ae
 * Date: 06/01/2016
 * Time: 4:15
 */

$couch_dsn = "http://localhost:5984/";
$couch_db = "clients";

require_once "couch.php";
require_once "couchClient.php";
require_once "couchDocument.php";


$client = new couchClient($couch_dsn,$couch_db);

/*
try {
    $info = $client->getDatabaseInfos();
} catch (Exception $e) {
    echo "Error:".$e->getMessage()." (errcode=".$e->getCode().")\n";
    exit(1);
}
var_dump($info);
*/

$song = new stdClass();
$song->nombre = "testuser";

try {
    $response = $client->storeDoc($song);
} catch (Exception $e) {
    echo "Error: ".$e->getMessage()." (errcode=".$e->getCode().")\n";
    exit(1);
}
print_r($response);
?>