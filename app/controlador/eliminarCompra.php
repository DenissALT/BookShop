<?php
require_once("../modelo/compra.php");
$arrayPersona=array('compra'=>$_POST['compra']);
echo json_encode(Usuario::eliminarCompra($arrayPersona));