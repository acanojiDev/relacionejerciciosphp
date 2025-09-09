<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 04</title>
    <link rel="stylesheet" href="../global.scss">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
	<header>
		<h1>
			Te saludo según tu hora geográfica.
		</h1>
	</header>

	<form action="index.php" method="post">
		<label for="hora">Introduzca una hora: </label>
		<input type="number" name="hora">
		<button type="submit">Enviar</button>
	</form>

	<?php

	if(isset($_POST["hora"])){
		$hora = $_POST["hora"];
		if($hora >= 6 && $hora <= 12) {
			echo "<p>Buenos días campeón</p>";
		}elseif($hora >= 13 && $hora <= 20){
			echo "<p>Buenas tardes campeón</p>";
		}else{
			echo "<p>Buenas noches campeón</p>";
		}
	}
	?>
</body>
</html>
