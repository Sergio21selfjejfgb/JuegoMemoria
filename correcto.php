<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Juego de memoria</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
	<h1 id="titulo">Juego de memoria</h1>
	
	<button id="botonreiniciar" onclick="location.reload()" >Reiniciar</button>
	<div id="vidas">Vidas: 3</div>
	<table id="tablero">
		<tr>
			<td><div id="contador">Aciertos: 0</div></td>
			<td><div class="card"><img data-id="0" src="img/pordefecto.jpg"></div></td>
			<td><div class="card"><img data-id="1" src="img/pordefecto.jpg"></div></td>
			<td><div class="card"><img data-id="2" src="img/pordefecto.jpg"></div></td>
		</tr>
		<tr>
			<td><div class="card"><img data-id="3" src="img/pordefecto.jpg"></div></td>
			<td><div class="card"><img data-id="4" src="img/pordefecto.jpg"></div></td>
			<td><div class="card"><img data-id="5" src="img/pordefecto.jpg"></div></td>
			<td><div class="card"><img data-id="6" src="img/pordefecto.jpg"></div></td>
		</tr>
		<tr>
			<td><div class="card"><img data-id="7" src="img/pordefecto.jpg"></div></td>
			<td><div class="card"><img data-id="8" src="img/pordefecto.jpg"></div></td>
			<td><div class="card"><img data-id="9" src="img/pordefecto.jpg"></div></td>
			<td><div class="card"><img data-id="10" src="img/pordefecto.jpg"></div></td>
		</tr>
		<tr>
			<td><div class="card"><img data-id="11" src="img/pordefecto.jpg"></div></td>
			<td><div class="card"><img data-id="12" src="img/pordefecto.jpg"></div></td>
			<td><div class="card"><img data-id="13" src="img/pordefecto.jpg"></div></td>
			<td><div class="card"><img data-id="14" src="img/pordefecto.jpg"></div></td>
		</tr>
	</table>
	
	<script src="script.js"></script>
</body>
</html>
