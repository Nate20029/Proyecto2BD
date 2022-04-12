<?php

class CConexion {
    
    public static function ConexionBD(){
        $host = "localhost";
        $dbname = "proyecto2";
        $username = "postgres";
        $password = "contra";

        try{
            $conn = new PDO ("pgsql:host=$host; dbname=$dbname", $username, $password);
            echo "Se conecto correctamente";
        }
        catch(PDOException $exp){
            echo ("No se pudo conectar a la base de datso $exp");
        }

        return $conn;
    }

}


?>