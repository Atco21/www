<?php
session_start();

if (!isset($_SESSION['array']) ) {

    $_SESSION['array'] = [];
    $x =1;

    //$i fila

    //$j columna 
    

    for ($i = 0; $i < 6; $i++) {
        for ($j = 0; $j < 7; $j++) {

            $_SESSION['array'][$i][$j] = $x;

            $x++;
        }
    }
    $_SESSION['res'] = "";
}

if(!isset($_SESSION['turno'])){

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
                    for($i = 1; $i<8; $i++){
                        echo '<td><button type="submit" name="boton" value="'.$i.'">+</button></td>';
                    }

                ?>
            </tr>
            </form>
        </table>



        <?php


                    print_r($_SESSION['turno']);
                    echo "<br>";
                    print_r($_SESSION['res']);

        ?>
    </div>
</body>
</html>


