<?php
class ConexionBD {
    
    static function conectar() {
        $conn = new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PASS, MYSQL_BD);
        if($conn->connect_errno){
            die('Error de conexion'. $conn->connect_error);
        }
        return $conn;
    }
}
