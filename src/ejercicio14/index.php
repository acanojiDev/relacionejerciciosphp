<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
    <link rel="stylesheet" href="../global.scss">
    <link rel="stylesheet" href="../style.css">
    <style>
        li{
            color: white;
        }
    </style>
</head>
<body>
<?php
    $palos = ["Oros", "Copas", "Espadas", "Bastos"];

    $puntos = [
        "As" => 11,
        "2"  => 0,
        "3"  => 10,
        "4"  => 0,
        "5"  => 0,
        "6"  => 0,
        "7"  => 0,
        "Sota" => 2,
        "Caballo" => 3,
        "Rey" => 4
    ];

    $figuras = array_keys($puntos);

    $baraja = [];
    foreach($palos as $palo){
        foreach($figuras as $figura){
            $baraja[] = "$figura de $palo";
        }
    }

    shuffle($baraja);

    $mano = array_slice($baraja, 0, 10);

    $total = 0;
    echo "<h2>Cartas seleccionadas:</h2><ul>";
    foreach($mano as $carta){
        echo "<li>$carta</li>";

        $partes = explode(" de ", $carta);
        $figura = $partes[0];

        $total += $puntos[$figura];
    }
    echo "</ul>";

    echo "<p><strong>Total de puntos:</strong> $total</p>";
    ?>
    <a id="volver" href="/src">Volver</a>
</body>
</html>

