<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 11</title>
    <link rel="stylesheet" href="../global.scss">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
	<header>
		<h1>Serie Fibonacci.</h1>
	</header>
	<form action="index.php" method="post">
		<label for="limite">Introduce el limite de la serie fibonacci:</label>
		<input type="number" name="numero">
	</form>


	<?php
		$n1 = 0;
		$n2 = 1;

		if(isset($_POST["numero"])){
			$n = $_POST["numero"];
			echo "<p>$n1,$n2</p>";
			for ($i=1; $i < ($n/2) ; $i++){
				$n1 += $n2;
				$n2 = $n1 + $n2;
				echo "<p>$n1,$n2</p>";
			}
		}
	?>


    <a id="volver" href="/src">Volver</a>
</body>
</html>
