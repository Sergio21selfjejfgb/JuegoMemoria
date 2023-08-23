<?php
session_start();
require_once './modelo/ConexionBD.php';
require_once './modelo/config.php';
require_once './modelo/Usuario.php';
require_once './modelo/UsuarioDAO.php';


    
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
    
    $usuarioDAO = new UsuarioDAO(ConexionBD::conectar());
    $usuarios = $usuarioDAO->obtenerPorNombre($nombre);    
    
        if(!$usuarios){//Comprobamos si el nombre introducido es correto consultandolo en la BD
           header("Location: index.php");
            die(); 
        }
        else if($password != $usuarios->getPassword()){//Comprobamos si la contraseña introducida es correcta consultando en la BD
            header("Location: index.php");
            die();
        }
        else{//hacemos login y creamos las variables de sesión            
            header("Location: correcto.php");            
            
        }
    



