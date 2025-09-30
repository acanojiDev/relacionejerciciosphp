<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 9</title>
    <link rel="stylesheet" href="../global.scss">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
	<header>
		<h1>
			Te muestro la tabla de multiplicar de cualquier número
		</h1>
	</header>
	<form action="index.php" method="post">
		<label for="numero">Introduce un numero: </label>
		<input type="number" name="numeroIntroducido">
		<button type="submit">Enviar</button>
	</form>

	<?php

		if(isset($_POST["numeroIntroducido"])){
			if(is_numeric($_POST["numeroIntroducido"])){
				$numero = $_POST["numeroIntroducido"];
				echo "
				<table border='1' cellpadding='5' cellspacing='0'>
					<tr>
						<th>Número</th>
						<th>Multiplicador</th>
						<th>Resultado</th>
					</tr>";

				for($i=1; $i<=10; $i++){
					echo "
					<tr>
						<td>$numero</td>
						<td>$i</td>
						<td>".($numero*$i)."</td>
					</tr>";
				}
			echo "</table>";
			}
		}else{

		}

	?>

	<a id="volver" href="/src">Volver</a>
</body>
</html>
