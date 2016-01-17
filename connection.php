<?php
/**
 * Created by PhpStorm.
 * User: ae
 * Date: 7/1/16
 * Time: 22:50
 */

//datos de conexión a la base de datos

$mySqlHost = 'localhost';
$mySqlUser = 'root';
$mySqlPass = '';
$mySqlDb = 'AR_IVW_mgmt';

//códigos de búsqueda " : + codigo de dos letras " => "nombre de columna de base de datos";

$searchCode = array(
    ':' => false,
    ':co' => 'code',
    ':na' => 'name',
    ':ip' => 'ip',
    ':ad' => 'address',
    ':te' => 'tel'
);

$tableName = array(
    'code' => 'client_',
    'name' => 'client_',
    'ip' => 'client_',
    'address' => 'client_',
    'tel' => 'client_'
);