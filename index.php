<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Memorama</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

<body>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<section style="height: 100vh;">
    <div style="background-image: url(images/arka.jpg); background-attachment: fixed; background-size: cover; width: 100%; height: 100vh; position: relative;"  >
    <div class="baslik">
        <b style="font-size: 101px; text-align: center; margin-bottom: -21px; display: block;">Memorama</b>
    </div>
    <section>
    <form action="login.php" method="post" >
        <div class="arkalogin">
            <div class="loginbaslik">Login</div>
                <hr style="border: 1px solid #ccc;">
                <input class="giris" type="text" name="nombre" placeholder="User" required="" >
                <input class="giris" type="password" name="pass" placeholder="Password" required="">
                <input class="butonlogin" type="submit" name="boton" value="Enviar"><br><br>
                <a href="registrar.php" id="enlaceRegistrar">Registrate</a>
        </div>
    </form>
    </section>    
    </section>
</body>
</html>
