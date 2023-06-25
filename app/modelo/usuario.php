<?php
require_once("../config/conexion.php");
class Usuario extends Conexion{
    public static function guardarDatos($data){
        try{
            $sql="INSERT INTO usuario(ci,nombre,apellido,telefono,direccion,email,usuario,clave)
            VALUES (:ci,:nombre,:apellido,:telefono,:direccion,:email,:usuario,:clave)";
            $stmt=Conexion::getConexion()->prepare($sql);
            $stmt->bindParam(':ci',$data['ci']);
            $stmt->bindParam(':nombre',$data['nombre']);
            $stmt->bindParam(':apellido',$data['apellido']);
            $stmt->bindParam(':telefono',$data['telefono']);
            $stmt->bindParam(':direccion',$data['direccion']);
            $stmt->bindParam(':email',$data['email']);
            $stmt->bindParam(':usuario',$data['usuario']);
            $stmt->bindParam(':clave',$data['clave']);
            $stmt->execute();
            return true;
        } catch(PDOException $th){
            echo $th->getMessage();
            return false;
        }
    }
    public static function eliminarU($data){
        try{
            $sql="DELETE FROM usuario where ci=:ci";
            $stmt=Conexion::getConexion()->prepare($sql);
            $stmt->bindParam(':ci',$data['ci']);
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
            return false;
        }
    }
    public static function buscarU($data){
        try{
            $sql="SELECT * FROM usuario where ci=:ci";
            $stmt=Conexion::getConexion()->prepare($sql);
            $stmt->bindParam(':ci',$data['ci']);
            $stmt->execute();
            $result=$stmt->fetch();
            return $result;
        }catch(PDOException $th){
            echo $th->getMessage();
            return false;
        }
    }
}