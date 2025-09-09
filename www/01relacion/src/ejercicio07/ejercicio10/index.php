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
		<h1>Calculo la media de N numeros</h1>
	</header>
	<form action="index.php" method="post">
		<label for="numero">Introduce numeros</label>
		<input type="number" name="number">
		<button type="submit">Enviar</button>
	</form>

	<?php

	if(isset($_POST["number"])){
		$numero = $_POST["number"];
		$numeroTotal = 0;
		$i = 1;
		do {
			$numeroTotal+=$numero;
			$i++;
		} while ($numero >= 0);
		$media = $numeroTotal / $i;
		echo "<p>La media de los numeros  es: $media </p>";
	}
	?>
</body>
</html>
