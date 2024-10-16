<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLERO DE AJEDREZ</title>
</head>
<body>

<table border="1" cellspacing="0">
    <?php


    for ($fila = 0; $fila < 9; $fila++) {
        echo "<tr>";
        for ($columna = 0; $columna < 9; $columna++) {
            // Alternar colores: blanco y negro
            if (($fila + $columna) % 2 == 0) {
                echo "<td style= 'padding: 30px'></td>";
            } else {
                echo "<td style='background-color:black; padding: 30px' ></td>";
            }
        }
        echo "</tr>";
    }
    ?>

    
</body>
</html>