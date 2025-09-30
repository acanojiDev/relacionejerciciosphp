<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 8</title>
    <link rel="stylesheet" href="../global.scss">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
	<header>
		<h1>
			Ordeno numeros ascendentemente.
		</h1>
	</header>


	<form action="index.php" method="post">
		<label for="numero1">Primer Numero: </label>
		<input type="number" name="numero1">
		<br>
		<label for="numero2">Segundo Numero: </label>
		<input type="number" name="numero2">
		<br>
		<label for="numero3">Tercer Numero: </label>
		<input type="number" name="numero3">
		<br>
		<button type="submit">Enviar</button>

		<?php

		if(isset($_POST["numero1"]) && isset($_POST["numero2"]) && isset($_POST["numero3"])){
			$numero1 = $_POST["numero1"];
			$numero2 = $_POST["numero2"];
			$numero3 = $_POST["numero3"];
			$message = "";
			if(($numero1 > $numero2) && ($numero1 > $numero3)){
				if($numero2 > $numero3)
					$message = "<p>El orden es $numero3, $numero2, $numero1.</p>";
				else
					$message = "<p>El orden es: $numero2, $numero3, $numero1.</p>";
			}
			if(($numero2 > $numero1) && ($numero2 > $numero3)){
				if($numero1 > $numero3)
					$message = "<p>El orden es: $numero3, $numero1, $numero2.</p>";
				else
					$message ="<p>El orden es: $numero1, $numero3, $numero2.</p>";
			}
			if(($numero3 > $numero1) && ($numero3 > $numero2)){
				if($numero2 > $numero1)
					$message = "<p>El orden es: $numero1, $numero2, $numero3.</p>";
				else
					$message = "<p>El orden es: $numero2, $numero1, $numero3.</p>";
			}
			echo $message;
		}
		?>
	</form>

	<a id="volver" href="/src">Volver</a>
</body>
</html>
