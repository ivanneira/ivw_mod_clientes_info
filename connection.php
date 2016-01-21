<?php
/**
 * Created by PhpStorm.
 * User: ae
 * Date: 7/1/16
 * Time: 22:50
 */

//datos de conexión a la base de datos

$c_dbType = 'mysql';
$c_host = 'localhost';
$c_user = 'root';
$c_pass = '';
$c_dataBase = 'AR_IVW_mgmt';

$t_info = 'client_info';
$t_code = 'client_code';
$t_ip = 'client_ip';
$t_address = 'client_address';

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