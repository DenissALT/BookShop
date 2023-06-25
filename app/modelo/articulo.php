<?php
require_once("../config/conexion.php");
class Articulo extends Conexion{

    public static function guardarDatos($data){
        try{
            $sql="INSERT INTO articulo(codigo,descripcion,precio,costo,existencia,iva)
            VALUES (:codigo,:descripcion,:precio,:costo,:existencia,:iva)";
            $stmt=Conexion::getConexion()->prepare($sql);
            $stmt->bindParam(':codigo',$data['codigo']);
            $stmt->bindParam(':descripcion',$data['descripcion']);
            $stmt->bindParam(':precio',$data['precio']);
            $stmt->bindParam(':costo',$data['costo']);
            $stmt->bindParam(':existencia',$data['existencia']);
            $stmt->bindParam(':iva',$data['iva']);
            $stmt->execute();
            return true;
        } catch(PDOException $th){
            echo $th->getMessage();
            return false;
        }
    }
    public static function eliminarArticulo($data){
        try{
            $sql="DELETE FROM articulo where codigo=:codigo";
            $stmt=Conexion::getConexion()->prepare($sql);
            $stmt->bindParam(':codigo',$data['codigo']);
            $stmt->execute();
            return true;
        }catch(PDOException $th){
            echo $th->getMessage();
            return false;
        }
    }
}
