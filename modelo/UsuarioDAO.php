<?php
class UsuarioDAO {
    //Conexion
    private $conn;
 
    public function __construct($conn) {
        if (!$conn instanceof mysqli) { //Comprueba si $conn es un objeto de la clase mysqli
            return false;
        }
        $this->conn = $conn;
    } 
    //
    
    //Funcion insertar nuevo usuario a la base de datos
    public function insertarUsuarios(Usuario $u) {
        $sql = "INSERT INTO usuarios (nombreCompleto,email,password,fechaNacimiento) VALUES (?,?,?,?)";
        if (!$stmt = $this->conn->prepare($sql)) {
            die("Error al preparar la sentencia: " . $this->conn->error);
        }
        $nombreCompleto = $u->getNombreCompleto();
        $email = $u->getEmail();
        $password = $u->getPassword();
        $fechaNacimiento = $u->getFechaNacimiento();
        
        $stmt->bind_param('ssss', $nombreCompleto,$email, $password,$fechaNacimiento);
        $stmt->execute();
    }
    //
    
    //Funcion obtener usuario por el nombreCompleto
    public function obtenerPorNombre($n) {
        $sql = "SELECT * FROM usuarios WHERE nombreCompleto = ?";
        if (!$stmt = $this->conn->prepare($sql)) {
            die("Error al preparar la sentencia: " . $this->conn->error);
        }
        $stmt->bind_param('s', $n);
        $stmt->execute();

        $result = $stmt->get_result();
        $usuario = $result->fetch_object('Usuario');
        //Para que netbeans reconozca el objeto de la clase Usuario  
        return $usuario;
    }
    //
}
