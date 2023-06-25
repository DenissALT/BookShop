<?php
require_once("../modelo/articulo.php");
$arrayPersona=array('codigo'=>$_POST['codigo']);
echo json_encode(Usuario::eliminarArticulo($arrayPersona));