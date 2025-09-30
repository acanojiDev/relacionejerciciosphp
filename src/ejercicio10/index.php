<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Media hasta número negativo</title>
	<link rel="stylesheet" href="../global.scss">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
	<h1>Introduce números separados por comas (la media se calcula hasta el primer número negativo)</h1>
	<form action="index.php" method="post">
		<input type="text" name="numeros" placeholder="Ej: 5, 10, 3, -1" required>
		<button type="submit">Calcular media</button>
	</form>

	<?php
	if (isset($_POST['numeros'])) {
		$entrada = $_POST['numeros'];
		$partes = explode(",", $entrada);

		$suma = 0;
		$contador = 0;

		foreach ($partes as $valor) {
			$valor = trim($valor);
			if (!is_numeric($valor)) continue;

			if ($valor < 0) break;

			$suma += $valor;
			$contador++;
		}

		if ($contador > 0) {
			$media = $suma / $contador;
			echo "<p>La media de los números hasta el primer negativo es: <strong>$media</strong></p>";
		} else {
			echo "<p>No se han introducido números válidos antes del primer negativo.</p>";
		}
	}
	?>

	<a id="volver" href="/src">Volver</a>
</body>
</html>
