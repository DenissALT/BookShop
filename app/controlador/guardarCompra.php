<?php
require_once("../modelo/compra.php");
$arrayPersona=array(
    'compra'=>$_POST['compra'],
    'fecha'=>$_POST['fecha'],
    'proveedorid'=>$_POST['proveedorid'],
    'total'=>$_POST['total'],
    'usuario'=>$_POST['usuario']);
echo json_encode(Usuario::guardarDatos($arrayPersona));