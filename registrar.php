<?php 
session_start();
require_once './modelo/ConexionBD.php';
require_once './modelo/config.php';
require_once './modelo/Usuario.php';
require_once './modelo/UsuarioDAO.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $conn=ConexionBD::conectar();
            
    $nombreC = $_POST["nombreR"];
    $emailR = $_POST["emailR"];
    $fechaN = $_POST["fechaR"];
    
    $usuDAO = new UsuarioDAO($conn); 
    
    $numeroRandomPassword = random_int(0,50);
    $numeroRandomPassword2 = random_int(0,10);
    $nombreUsu1 = substr($nombreC, 0,3);
    $nombreUsu2 = strtoupper($nombreUsu1);
    
    $nuevoUsuario = new Usuario();
    $nuevoUsuario->setNombreCompleto($nombreUsu2);
    $nuevoUsuario->setEmail($emailR);
    $nuevoUsuario->setPassword($nombreUsu2 . $numeroRandomPassword . $numeroRandomPassword2);
    $nuevoUsuario->setFechaNacimiento($fechaN);
    
    $usuDAO->insertarUsuarios($nuevoUsuario);
    $_SESSION['nombreUsuario'] = $nuevoUsuario->getNombreCompleto();
    $_SESSION['passwordUsuario'] = $nuevoUsuario->getPassword();
    header("Location: usuypassRegistro.php");
    die();
    
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registrar</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

<body>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<section style="height: 100vh;">
    <div style="background-image: url(images/arka.jpg); background-attachment: fixed; background-size: cover; width: 100%; height: 100vh; position: relative;"  >
    <section>
        <form method="post" action="registrar.php">
        <div class="arkaregistro">
            <div class="loginbaslik">Registro</div>
            <hr style="border: 1px solid #ccc;">
            <input class="giris" type="text" name="nombreR" placeholder="Nombre Completo" pattern="^[A-Z][A-z]+" required="" title="El nombre del usuario tiene que empezar por MAYÚSCULA y no puede contener números">
            <input class="giris" type="text" name="emailR" placeholder="Email" pattern="[a-z0-9._]+@[a-z0-9.]+\.[a-z]{2,4}$" required="" title="El email de contener una @ y un punto .">
            <input class="giris" type="date" name="fechaR" placeholder="Fecha Nacimiento" required="">
            <input class="butonlogin" type="submit" name="boton" value="Registrarse"><br><br>
            
        </div>
    </form>
    </section>    
    </section>
</body>
</html>
