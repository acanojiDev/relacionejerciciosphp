<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 12</title>
	<link rel="stylesheet" href="../global.scss">
	<link rel="stylesheet" href="../style.css">
	<style>
		.piramide {
			font-family: monospace;
			white-space: pre;
			color: white;
		}
	</style>
</head>
<body>

	<header>
		<h1>Te dibujo una pirámide de X altura.</h1>
	</header>

	<form action="index.php" method="post">
		<label for="altura">Introduzca la altura: </label>
		<input type="number" name="altura" required>
		<button type="submit">Enviar</button>
	</form>

	<div class="piramide">
	<?php
		if (isset($_POST["altura"])) {
			$altura = intval($_POST["altura"]);

			for ($i = 1; $i <= $altura; $i++) {
				for ($j = 1; $j <= $altura - $i; $j++) {
					echo " ";
				}
				for ($k = 1; $k <= (2 * $i - 1); $k++) {
					echo "*";
				}
				echo "<br>";
			}
		}
	?>
	</div>

	<a id="volver" href="/src">Volver</a>
</body>
</html>
