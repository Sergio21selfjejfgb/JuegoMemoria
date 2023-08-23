<?php 
session_start();
require_once './modelo/ConexionBD.php';
require_once './modelo/config.php';
require_once './modelo/Usuario.php';
require_once './modelo/UsuarioDAO.php';


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nuevo Usuario</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            .contenedorNuevoUsu{
                background-color: white;
                text-align: center;
                border: 2px solid black;
                width: 600px;
                height: 600px;
                padding: 30px;
                margin-top: 60px;
                margin-left: 38%;
            }
            h3{
                background-color: greenyellow;
            }
            a{
                font-size: 2rem;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<section style="height: 100vh;">
    <div style="background-image: url(images/arka.jpg); background-attachment: fixed; background-size: cover; width: 100%; height: 100vh; position: relative;"  >
        <div class="contenedorNuevoUsu">
            <h1>Nuevo Usuario</h1><br>   
            <h2>Nombre Usuario:</h2><br>
                <h3><?=  $_SESSION['nombreUsuario']?></h3><br>
            <h2>Password Usuario:</h2>
                <h3><?=  $_SESSION['passwordUsuario']?></h3><br>
                <a href="index.php">Login</a>
        </div>
</section>
    </body>
</html>
