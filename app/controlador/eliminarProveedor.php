<?php
require_once("../modelo/proveedor.php");
$arrayPersona=array('ci'=>$_POST['ci']);
echo json_encode(Usuario::eliminarProveedor($arrayPersona));