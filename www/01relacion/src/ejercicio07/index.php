<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <link rel="stylesheet" href="../global.scss">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
	<header>
		<h1>
			Calculador de segundos restantes hasta media noche.
		</h1>
	</header>

	<form action="index.php" method="post">
		<label for="hora">Introduzca la hora (en Horas y minutos): </label>
		<input
		type="time"
		id="hourMinute"
		name="hourMinute"
		name="hourMinute"
		min="00:01"
		max="23:59"
		required />
	<button type="submit">Enviar</button>
	</form>

	<?php
		if(isset($_POST["hourMinute"])){
			$horas = $_POST["hourMinute"];
			/* Divide el string $horas en partes, usando : como separador
			ej: 16:45 lo devuelve en un array ["16", "45"]

			Despues asigna cadad elemento del array a una variable es decir
			$h= "16"
			$m = "45"*/
			list($h, $m) = explode(":", "$horas");
			$segundos = $h * 3600 + $m * 60;

		}else{
			echo "<p>Introduceme valores válidos</p>"
		}


	?>
</body>
</html>
