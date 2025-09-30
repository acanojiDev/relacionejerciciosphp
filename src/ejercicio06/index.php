<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 6</title>
    <link rel="stylesheet" href="../global.scss">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
	<header>
		<h1>
			Consulta tu horóscopo
		</h1>
	</header>

	<form action="index.php" method="post">
		<label for="dia">Día de nacimiento: </label>
		<input type="number" name="dia" min="1" max="31" required>
		<br><br>
		<label for="mes">Mes de nacimiento: </label>
		<input type="number" name="mes" min="1" max="12" required>
		<br><br>
		<button type="submit">Enviar</button>
	</form>

	<?php
	function obtenerHoroscopo($dia, $mes) {
		if (($mes == 3 && $dia >= 21) || ($mes == 4 && $dia <= 19)) {
			return "Aries";
		} elseif (($mes == 4 && $dia >= 20) || ($mes == 5 && $dia <= 20)) {
			return "Tauro";
		} elseif (($mes == 5 && $dia >= 21) || ($mes == 6 && $dia <= 20)) {
			return "Géminis";
		} elseif (($mes == 6 && $dia >= 21) || ($mes == 7 && $dia <= 22)) {
			return "Cáncer";
		} elseif (($mes == 7 && $dia >= 23) || ($mes == 8 && $dia <= 22)) {
			return "Leo";
		} elseif (($mes == 8 && $dia >= 23) || ($mes == 9 && $dia <= 22)) {
			return "Virgo";
		} elseif (($mes == 9 && $dia >= 23) || ($mes == 10 && $dia <= 22)) {
			return "Libra";
		} elseif (($mes == 10 && $dia >= 23) || ($mes == 11 && $dia <= 21)) {
			return "Escorpio";
		} elseif (($mes == 11 && $dia >= 22) || ($mes == 12 && $dia <= 21)) {
			return "Sagitario";
		} elseif (($mes == 12 && $dia >= 22) || ($mes == 1 && $dia <= 19)) {
			return "Capricornio";
		} elseif (($mes == 1 && $dia >= 20) || ($mes == 2 && $dia <= 18)) {
			return "Acuario";
		} elseif (($mes == 2 && $dia >= 19) || ($mes == 3 && $dia <= 20)) {
			return "Piscis";
		} else {
			return "Fecha no válida";
		}
	}

	if(isset($_POST["dia"]) && isset($_POST["mes"])){
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];

		if(is_numeric($dia) && is_numeric($mes)){
			echo "<p>Tu horóscopo es: <strong>" . obtenerHoroscopo($dia, $mes) . "</strong></p>";
		}else{
			echo "<p>Introduce un número válido</p>";
		}
	}else{
		echo "<p>Introduce tu fecha de nacimiento</p>";
	}
	?>

	<a id="volver" href="/src">Volver</a>
</body>
</html>
