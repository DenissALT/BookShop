<?php
require_once("../modelo/proveedor.php");
$arrayPersona=array('ruc'=>$_POST['ruc']);
echo json_encode(Proveedor::buscarProveedor($arrayPersona));