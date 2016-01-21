<?php
/**
 * Created by PhpStorm.
 * User: ae
 * Date: 06/01/2016
 * Time: 4:15
 */
include_once "connection.php";



class db_access{

    public $sqlPDO;


    public function __construct(){

        global $sqlPDO;
        global $c_dbType;
        global $c_host;
        global $c_dataBase;
        global $c_user;
        global $c_pass;

        try {
            $sqlPDO = new PDO($c_dbType . ':host=' . $c_host . ';dbname=' . $c_dataBase, $c_user, $c_pass);
            echo "conectado";
        }catch (PDOException $e) {
            echo "error de conexión";
        }
    }

    function prepareSentence($sqlQueryString){

        global $sqlPDO;

        $PDOprepare = $sqlPDO->prepare($sqlQueryString);

        $PDOprepare->execute();

        $rows = $PDOprepare->fetchAll(PDO::FETCH_ASSOC);

        return $rows;

    }

    function searchName($query)
    {

        global $sqlPDO;
        global $t_info;

        $sqlQueryString = "SELECT * FROM ".$t_info." WHERE name LIKE '%".$query."%'";

        $a = new db_access;

        return $a->prepareSentence($sqlQueryString);
    }




}

/*

class db_access
{
    function prepareSentence($sqlQueryString){

        global $sqlPDO;

        $PDOprepare = $sqlPDO->prepare($sqlQueryString);

        $PDOprepare->execute();

        $rows = $PDOprepare->fetchAll(PDO::FETCH_ASSOC);

        return $rows;

    }

    function searchName($query)
    {

        global $sqlPDO;
        global $t_info;

        $sqlQueryString = "SELECT * FROM '" . $t_info . "' WHERE name LIKE '%" . $query . "%'";

        $a = new db_access;

        return $a->prepareSentence($sqlQueryString);
    }

    function searchStatus($query)
    {

        global $sqlPDO;
        global $t_info;

        $sqlQueryString = "SELECT * FROM '" . $t_info . "' WHERE status LIKE '%" . $query . "%'";

        return prepareSentence($sqlQueryString);
    }

    function searchCode($query)
    {

        global $sqlPDO;
        global $t_code;

        $sqlQueryString = "SELECT * FROM '" . $t_code . "' WHERE code LIKE '%" . $query . "%'";

        return prepareSentence($sqlQueryString);


    }

    function searchIp($query)
    {

        global $sqlPDO;
        global $t_ip;

        $sqlQueryString = "SELECT * FROM '" . $t_ip . "' WHERE ip LIKE '%" . $query . "%'";

        return prepareSentence($sqlQueryString);

    }

    function searchAdress($query)
    {

        global $sqlPDO;
        global $t_address;

        $sqlQueryString = "SELECT * FROM '" . $t_address . "' WHERE address LIKE '%" . $query . "%'";

        return prepareSentence($sqlQueryString);
    }
}
*/


?>