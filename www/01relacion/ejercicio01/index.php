<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Conversor de Euros</title>
    <link rel="stylesheet" href="../global.scss">
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <header>
        <h1>Conversor de euros a pesetas</h1>
    </header>


    <form action="index.php" method="get">
        <label for="euros">Euros:</label>
        <input type="text" id="euros" name="euros" />
        <button type="submit">Convertir</button>
    </form>

    <?php
        if (isset($_GET["euros"]) && is_numeric($_GET["euros"])) {
            $euros = $_GET["euros"];
            $operacion = $euros * 166.386;
            echo "<p id=succes-message>$euros euros son aproximadamente  <strong> $operacion pesetas</strong>.</p>";
        } elseif (isset($_GET["euros"])) {
            echo "<p id=error-message>Por favor, introduce un número válido.</p>";
        }
    ?>

    <a id="volver" href="../index.html">Volver</a>

</body>
</html>
