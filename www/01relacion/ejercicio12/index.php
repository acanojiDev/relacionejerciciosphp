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
		<h1>
			Te dibujo una pirámide de X altura.
		</h1>
	</header>

	<form action="index.php" method="post">
		<label for="altura">Introduzca la altura: </label>
		<input type="number" name="altura">
		<button type="submit">Enviar</button>
	</form>

	<?php
		if(isset($_POST["altura"])){
			$altura = $_POST["altura"];
			for ($i=0; $i <= $altura ; $i++) {
				for ($j=0; $j<$i; $j++) {
					if($i%2==0){
						print_r(' ');
					}else{
						print_r('*');
					}
				}
				echo "<br>";
			}
		}
	?>
</body>
</html>
