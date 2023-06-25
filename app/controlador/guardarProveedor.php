<?php
require_once("../modelo/proveedor.php");
$arrayPersona=array('ci'=>$_POST['ci'],
'nombre'=>$_POST['nombre'],
'apellido'=>$_POST['apellido'],
'telefono'=>$_POST['telefono'],
'direccion'=>$_POST['direccion'],
'email'=>$_POST['email'],
'ruc'=>$_POST['ruc']);
echo json_encode(Usuario::guardarDatos($arrayPersona));