<?php
session_start();
if (!isset($_SESSION['array'])) {

    $_SESSION['array'] = [];
    $x = 1;

    //$i fila

    //$j columna 


    for ($i = 0; $i < 6; $i++) {
        for ($j = 0; $j < 7; $j++) {

            $_SESSION['array'][$i][$j] = 0;

            $x++;
        }
    }
    $_SESSION['res'] = "";
}

if (!isset($_SESSION['turno'])) {

    $_SESSION['turno'] = 1;
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4-En_Raya</title>
</head>

<body>



    <div style="display: flex; justify-content: center;">
        <table border="1" cellpadding="10">
            <?php
            if ($_SESSION['array']) {
                foreach ($_SESSION['array'] as $fila) {
                    echo "<tr>";
                    foreach ($fila as $value) {
                        echo "<td>$value</td>";
                    }
                    echo "</tr>";
                }
            }
            ?>
            <form action="./action.php" method="post">
                <tr>
                    <?php
                    for ($i = 1; $i < 8; $i++) {
                        echo '<td><button type="submit" name="boton" value="' . $i . '">+</button></td>';
                    }

                    ?>
                </tr>
            </form>
            <br>

        </table>
        <br>


    </div>

    <div style="display: flex; justify-content: center; margin-top:1em;">
        <div style="margin:1em;">
        <form action="./borrar.php" method="post">
            <button type="submit" name="borrar" value="1">Borrar</button>
        </form>
        </div>
        <?php
            echo"Turno: ";print_r($_SESSION['turno']);
            echo "<br>";
            echo"Última columna seleccionada: ";print_r($_SESSION['res']);

        ?>
        
    </div>

</body>

</html>