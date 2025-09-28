<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movimientos del Alfil</title>
    <style>
        .tablero {
            display: grid;
            grid-template-columns: repeat(8, 50px);
            grid-template-rows: repeat(8, 50px);
            gap: 0;
            border: 2px solid black;
        }
        .casilla {
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
        }
        .blanca { background-color: #f0d9b5; }
        .negra { background-color: #b58863; }
        .alfil { background-color: yellow; }
        .movimiento { background-color: lightgreen; }
    </style>
</head>
<body>
    <h1>Movimientos del Alfil en Ajedrez</h1>

    <form action="" method="post">
        <label for="posicion">Introduce la posición del alfil (por ejemplo: c4): </label>
        <input type="text" name="posicion" pattern="[a-h][1-8]" required>
        <button type="submit">Mostrar movimientos</button>
    </form>

    <?php
    if(isset($_POST['posicion'])){
        $posicion = strtolower($_POST['posicion']);
        $colLetra = $posicion[0];
        $fila = intval($posicion[1]);

        $columnas = ['a','b','c','d','e','f','g','h'];
        $col = array_search($colLetra, $columnas) + 1;


        echo '<div class="tablero">';
        for($f=8; $f>=1; $f--){
            for($c=1; $c<=8; $c++){
                $clase = (($f + $c) % 2 == 0) ? 'blanca' : 'negra';

                if($f == $fila && $c == $col){
                    $clase = 'alfil';
                }
                elseif(abs($fila - $f) == abs($col - $c)){
                    $clase = 'movimiento';
                }

                echo "<div class='casilla $clase'>$columnas[$c-1]$f</div>";
            }
        }
        echo '</div>';
    }
    ?>
</body>
</html>
