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
        <h1>Calculador de total factura a partir de base imponible</h1>
		<p>Soy un programa que calcula el total de tu factura a partir de la base imponible</p>
    </header>


	<form action="index.php" method="get">
			<label for="baseImponible">Introduzca la base imponible: </label>
			<input type="text" name="baseImponible">
			<p>*Tengo un iva de un 21%</p>
	</form>
	<?php
		if (isset($_GET["baseImponible"]) && is_numeric($_GET["baseImponible"])) {
			$baseImponible = $_GET["baseImponible"];
			$ivaCalculado = $baseImponible * (21/100);
			$resultado = $ivaCalculado + $baseImponible;
			echo "<p>Seria $resultado </p>";
		}elseif(isset($_GET["euros"])){
			echo "<p>Porfavor introduzca un numero válido.</p>";
		}
	?>
	    <a id="volver" href="/src">Volver</a>
</body>
</html>
