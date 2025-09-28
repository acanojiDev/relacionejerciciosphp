<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>

    <h1>Calcula el factorial de un número</h1>

    <form action="" method="post">
        <label for="numero">Introduce un número entero:</label>
        <input type="number" name="numero" min="0">
        <button type="submit">Calcular</button>
    </form>

    <?php
        if(isset($_POST['numero'])){
            $numero = intval($_POST['numero']);
            $factorial = 1;

            if($numero < 0){
                echo "<p>No se puede calcular el factorial de un número negativo.</p>";
            } else {
                for($i = 1; $i <= $numero; $i++){
                    $factorial *= $i;
                }
                echo "<p>El factorial de $numero es: $factorial</p>";
            }
        }
    ?>

</body>
</html>
