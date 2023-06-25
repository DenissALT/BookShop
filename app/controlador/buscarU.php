<?php
require_once("../modelo/usuario.php");
$arrayPersona=array('ci'=>$_POST['ci']);
echo json_encode(Usuario::buscarU($arrayPersona));