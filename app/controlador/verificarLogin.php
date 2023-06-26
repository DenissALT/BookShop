<?php 
error_reporting(E_ALL);
ini_set('display_errors1', 1);
require_once("../modelo/login.php");
$arrayPersona=array(
    'usuario'=>$_POST['usuario'],
    'clave'=>$_POST['clave']);
echo json_encode(Login::verificarLogin($arrayPersona));