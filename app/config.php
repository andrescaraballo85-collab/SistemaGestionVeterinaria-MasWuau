<?php
/** Create by PhpStorm */

define ('APP_NAME','SISTEMA VETERINARIO - MASWUAW');
define ('SERVIDOR','localhost');
define ('USUARIO','root');
define ('PASSWORD','');
define ('BD','sistemaveterinario');

$servidor = "mysql:dbname=".BD. ";host=".SERVIDOR.";port=3307";

try{
    $pdo = new PDO ($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"));
    //echo "conexión exitosa con la base de datos";
}catch (PDOException $e){
    die("Error de conexión: " . $e->getMessage());
}



$url = "http://localhost/sistemaVeterinario";

date_default_timezone_set('America/Bogota');
$fechaHora = date('Y-m-d H:i:s');