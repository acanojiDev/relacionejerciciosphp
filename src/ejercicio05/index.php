<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 5</title>
    <link rel="stylesheet" href="../global.scss">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
	<header>
		<h1>
			Calculadora de dinero a cobrar
		</h1>
	</header>


	<form action="index.php" method="post">
		<label for="horasTrabajadas">Introduzca sus horas semanales trabajadas: </label>
		<input type="number" name="horasTrabajadas">
		<button type="submit">Enviar</button>
	</form>

	<?php
	if(isset($_POST["horasTrabajadas"])){
		if(is_numeric($_POST["horasTrabajadas"])){
			$horasTrabajadas = $_POST["horasTrabajadas"];
			$horasNormales = 12;
			$horasExtra = 16;
			$totalDineroNormal = 0;
			if($horasTrabajadas>40){
				$totalDineroNormal = $horasTrabajadas * $horasNormales;
				$totalDineroNormal += ($horasTrabajadas - 40) * $horasExtra;
			}else{
				$totalDineroNormal = $horasTrabajadas * $horasNormales;
			}
			echo "<p>Te corresponden $totalDineroNormal euros</p>";
		}else{
			echo "<p>Tienes que introducir un número válido</p>";
		}
	}else{
		echo "<p>Tienes un campo vacío </p>";
	}
	?>

	<a id="volver" href="/src">Volver</a>
</body>
</html>
