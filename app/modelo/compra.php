<?php
require_once("../config/conexion.php");
class Compra extends Conexion{

    public static function guardarDatos($data){
        try{
            $sql="INSERT INTO compra(compra,fecha,proveedorid,total,usuario)
            VALUES (:compra,:fecha,:proveedorid,:total,:usuario)";
            $stmt=Conexion::getConexion()->prepare($sql);
            $stmt->bindParam(':compra',$data['compra']);
            $stmt->bindParam(':fecha',$data['fecha']);
            $stmt->bindParam(':proveedorid',$data['proveedorid']);
            $stmt->bindParam(':total',$data['total']);
            $stmt->bindParam(':usuario',$data['usuario']);
            $stmt->execute();
            return true;
        } catch(PDOException $th){
            echo $th->getMessage();
            return false;
        }
    }
    public static function eliminarCompra($data){
        try{
            $sql="DELETE FROM compra where compra=:compra";
            $stmt=Conexion::getConexion()->prepare($sql);
            $stmt->bindParam(':compra',$data['compra']);
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
            return false;
        }
    }



    public static function buscarRUC($data){
        try{
            $sql="SELECT * FROM proveedor where ruc=:ruc";
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
