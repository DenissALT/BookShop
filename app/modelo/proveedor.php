<?php
require_once("../config/conexion.php");
class Proveedor extends Conexion{

    public static function guardarDatos($data){
        try{
            $sql="INSERT INTO proveedor(ci,nombre,apellido,telefono,direccion,email,ruc)
            VALUES (:ci,:nombre,:apellido,:telefono,:direccion,:email,:ruc)";
            $stmt=Conexion::getConexion()->prepare($sql);
            $stmt->bindParam(':ci',$data['ci']);
            $stmt->bindParam(':nombre',$data['nombre']);
            $stmt->bindParam(':apellido',$data['apellido']);
            $stmt->bindParam(':telefono',$data['telefono']);
            $stmt->bindParam(':direccion',$data['direccion']);
            $stmt->bindParam(':email',$data['email']);
            $stmt->bindParam(':ruc',$data['ruc']);
            $stmt->execute();
            return true;
        } catch(PDOException $th){
            echo $th->getMessage();
            return false;
        }
    }
    public static function eliminarProveedor($data){
        try{
            $sql="DELETE FROM proveedor where ci=:ci";
            $stmt=Conexion::getConexion()->prepare($sql);
            $stmt->bindParam(':ci',$data['ci']);
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
            return false;
        }
    }
    public static function buscarProveedor($data){
         try{
             $sql="SELECT FROM proveedor where ruc=:ruc";
             $stmt=Conexion::getConexion()->prepare($sql);
             $stmt->bindParam(':ruc',$data['ruc']);
             $stmt->execute();
            $result=$stmt->fetch();
             return $result;
         }catch(PDOException $th){
             echo $th->getMessage();
             return false;
         }
     }
}