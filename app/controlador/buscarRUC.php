<?php
require_once("../modelo/compra.php");
$arrayPersona=array('ruc'=>$_POST['ruc']);
echo json_encode(Compra::buscarRUC($arrayPersona));