<?php
require_once("app\modelo\login.php");
$arrayPersona=array(
    'usuario'=>$_POST['usuario'],
    'clave'=>$_POST['clave']);
echo json_encode(Login::verificarLogin($arrayPersona));