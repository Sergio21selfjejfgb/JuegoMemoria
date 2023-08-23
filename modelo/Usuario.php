<?php
/**
 * Description of Usuario
 *
 * @author Alumno
 */
class Usuario {
    private $id;
    private $nombreCompleto;
    private $email;
    private $password;
    private $fechaNacimiento;
    
    public function getId() {
        return $this->id;
    }

    public function getNombreCompleto() {
        return $this->nombreCompleto;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setNombreCompleto($nombreCompleto) {
        $this->nombreCompleto = $nombreCompleto;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    public function setFechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $fechaNacimiento;
        return $this;
    }


    
    






    
}
