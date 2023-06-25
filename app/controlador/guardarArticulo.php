<?php
require_once("../modelo/articulo.php");
$arrayPersona=array('codigo'=>$_POST['codigo'],
'descripcion'=>$_POST['descripcion'],
'precio'=>$_POST['precio'],
'costo'=>$_POST['costo'],
'existencia'=>$_POST['existencia'],
'iva'=>$_POST['iva']);
echo json_encode(Usuario::guardarDatos($arrayPersona));