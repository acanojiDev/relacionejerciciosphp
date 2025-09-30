<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 7</title>
    <link rel="stylesheet" href="../global.scss">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
	<header>
		<h1>Calculador de segundos restantes hasta medianoche</h1>
	</header>

	<form action="index.php" method="post">
		<label for="hourMinute">Introduzca la hora (HH:MM): </label>
		<input
			type="time"
			id="hourMinute"
			name="hourMinute"
			min="00:01"
			max="23:59"
			required />
		<button type="submit">Enviar</button>
	</form>

	<?php
	if(isset($_POST["hourMinute"])){
		$horas = $_POST["hourMinute"];

		list($h, $m) = explode(":", $horas);

		$segundos_transcurridos = $h * 3600 + $m * 60;
		$segundos_dia = 24 * 3600;
		$segundos_restantes = $segundos_dia - $segundos_transcurridos;

		echo "<p>Desde las $h:$m quedan <strong>$segundos_restantes segundos</strong> hasta medianoche.</p>";
	} else {
		echo "<p>Introduce valores válidos</p>";
	}
	?>

	<a id="volver" href="/src">Volver</a>
</body>
</html>
