<?php
require_once("app\config\conexion.php");
class Login extends Conexion{
    public static function verificarLogin($data){
        try{
            $sql="SELECT * FROM login where usuario=:usuario and clave=:clave";
            $stmt=Conexion::getConexion()->prepare($sql);
            $stmt->bindParam(':id',$data['id']);
            $stmt->bindParam(':usuario',$data['usuario']);
            $stmt->bindParam(':clave',$data['clave']);
            $stmt->execute();
            $result=$stmt->fetch();
            return $result;
        }catch(PDOException $th){
            echo $th->getMessage();
            return false;
        }
    }
}