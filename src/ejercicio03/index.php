<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio03</title>
    <link rel="stylesheet" href="../global.scss">
	<link rel="stylesheet" href="../style.css">
</head>
<body>

	<header>
	<h1>Calculo el volumen de un cono</h1>
	</header>

	<form action="index.php" method="post">
		<label for="altura">Introduzca la altura: </label>
		<input type="number" name="altura">
		<br>
		<label for="radio">Introduzca el radio: </label>
		<input type="number" name="radio">
		<button type="submit">Enviar</button>
	</form>
	<?php
	if(isset($_POST["altura"]) && isset($_POST["radio"])){
		$altura = $_POST["altura"];
		$radio = $_POST["radio"];

		if(is_numeric($altura) && is_numeric($radio)){
			$volumen = (1/3) * pi() * $radio**2 * $altura;
			echo "<p>El volumen de tu cono es de: $volumen </p>";
		} else {
			echo "<p>Introduzca números válidos por favor</p>";
		}
	} else {
		echo "<p>Faltan parámetros altura o radio</p>";
	}
	?>
	<a id="volver" href="/src">Volver</a>
</body>
</html>
