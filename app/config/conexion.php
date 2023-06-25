<?php
class Conexion
{
    public $host="localhost";
    public $db_name="bookshop";
    public $port="5432";
    public $user="postgres";
    public $driver="pgsql";
    public $password= "123";
    public $con;

    public static function getConexion()
    {
        try {
            $conexion= new Conexion();
            $conexion ->con = new PDO("{$conexion->driver}:host={$conexion->host};
            port={$conexion->port};dbname={$conexion->db_name}", $conexion->user,$conexion->password);
            $conexion->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion->con;
            echo "Conexion exitosa..";
        }catch (PDOException $th) {
            echo "Error: ", $th ->getMessage();
        }
    }
}
Conexion::getConexion();
?>