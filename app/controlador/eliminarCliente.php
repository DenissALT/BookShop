<?php
require_once("../modelo/cliente.php");
$arrayPersona=array('ci'=>$_POST['ci']);
echo json_encode(Usuario::eliminarCliente($arrayPersona));