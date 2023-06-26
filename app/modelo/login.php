<?php
require_once("../config/conexion.php");
class Login extends Conexion{
    public static function verificarLogin($data){
        try{
            $sql="SELECT * FROM usuario where usuario=:usuario and clave=:clave";
            $stmt=Conexion::getConexion()->prepare($sql);
            $stmt->bindParam(':usuario',$data['usuario']);
            $stmt->bindParam(':clave',$data['clave']);
            $stmt->execute();
            $result=$stmt->fetch();
            alert("aaa");
            return $result;
        }catch(PDOException $th){
            echo $th->getMessage();
            return false;
        }
    }
}