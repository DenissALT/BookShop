<?php
require_once("../modelo/usuario.php");
$arrayPersona=array('ci'=>$_POST['ci'],
'nombre'=>$_POST['nombre'],
'apellido'=>$_POST['apellido'],
'telefono'=>$_POST['telefono'],
'direccion'=>$_POST['direccion'],
'email'=>$_POST['email'],
'usuario'=>$_POST['usuario'],
'clave'=>$_POST['clave']);
echo json_encode(Usuario::guardarDatos($arrayPersona));