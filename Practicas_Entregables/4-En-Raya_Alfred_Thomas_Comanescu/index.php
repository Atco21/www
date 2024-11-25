
<!-- AUTOR: ALFRED THOMAS COMANESCU -->


<?php

// Creacion de variables si no existen
session_start();
if (!isset($_SESSION['array'])) {

    $_SESSION['ganador']=false;
    $_SESSION['array'] = [];

    //$i fila

    //$j columna 


    for ($i = 0; $i < 6; $i++) {
        for ($j = 0; $j < 7; $j++) {

            $_SESSION['array'][$i][$j] = 0;
        }
    }

}

if (!isset($_SESSION['turno'])) {

    $_SESSION['turno'] = rand(1,2);
}




// Funcion para comprobar si existe algun ganador
function verGanador($jugador){

    //horizontal
    for ($i = 5; $i >= 0; $i--) {
        $cont = 0;
        for ($j = 0; $j < 7; $j++) { 
            if ($_SESSION['array'][$i][$j] === $jugador) {
                $cont++;
                if ($cont === 4) {
                    $_SESSION['res'] ="";
                    $_SESSION['res'] = "Ganador $jugador!!!!!";
                    $_SESSION['ganador'] = true;
                   
                }
            } else {
                $cont = 0;
            }
        }
    }


    // vertical
    for ($j = 0; $j < 7; $j++) {
        $cont = 0;
        for ($i = 5; $i >= 0; $i--) { 
            if ($_SESSION['array'][$i][$j] === $jugador) {
                $cont++;
                if ($cont === 4) {
                    $_SESSION['res'] = "Ganador $jugador!!!!!";
                    $_SESSION['ganador'] = true;
                }
            } else {
                $cont = 0;
            }
        }
    }


     // izqArriba a dchaAbajo
     for ($i = 0; $i <= 5; $i++) {
        for ($j = 0; $j <= 6; $j++) {
            
            if ($i - 3 >= 0 && $j + 3 <= 6) { 
                if (
                    $_SESSION['array'][$i][$j] === $jugador &&
                    $_SESSION['array'][$i - 1][$j + 1] === $jugador &&
                    $_SESSION['array'][$i - 2][$j + 2] === $jugador &&
                    $_SESSION['array'][$i - 3][$j + 3] === $jugador
                ) {
                    $_SESSION['res'] = "Ganador $jugador!!!!!";
                    $_SESSION['ganador'] = true;
                }
            }
        }
    }


    // diagonal izqAbajo hasta drchArriba
    for ($i = 5; $i >= 0; $i--) {
        for ($j = 0; $j < 7; $j++) {
            
            if ($i + 3 <= 5 && $j + 3 <= 6) { 
                if (
                    $_SESSION['array'][$i][$j] === $jugador &&
                    $_SESSION['array'][$i + 1][$j + 1] === $jugador &&
                    $_SESSION['array'][$i + 2][$j + 2] === $jugador &&
                    $_SESSION['array'][$i + 3][$j + 3] === $jugador
                ) {
                    $_SESSION['res'] = "Ganador $jugador!!!!!";
                    $_SESSION['ganador'] = true;
                }
            }
        }
    }


}


// Ejecturar si existe algun post del boton de añadir a la columna la ficha
if (isset($_POST['boton']) && $_SESSION['ganador'] == false) {
    $encontrado = false;

    $i = 5;
    $value = $_POST['boton'];

    // Movimiento del jugador humano
    while (!$encontrado && $i >= 0) {
        if ($_SESSION['array'][$i][$value - 1] === 0) {
            if ($_SESSION['turno'] == 1) {
                $_SESSION['array'][$i][$value - 1] = 1;
                verGanador(1);
                $_SESSION['turno'] = 2; 
            }
            $encontrado = true;
        }
        $i--;
    }

    // Movimiento de la IA
    if ($_SESSION['turno'] == 2 && $_SESSION['ganador'] == false) {
        $jugadaIA = false;

        while (!$jugadaIA) {
            $columna = rand(1, 7); 
            $i = 5;

            
            while (!$jugadaIA && $i >= 0) {
                if ($_SESSION['array'][$i][$columna - 1] === 0) {
                    $_SESSION['array'][$i][$columna - 1] = 2;
                    verGanador(2); 
                    $_SESSION['turno'] = 1; 
                    $jugadaIA = true;
                }
                $i--;
            }
        }
    }
}






?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4-En_Raya_ALFRED_THOMAS_COMANESCU</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>


    <div style="display: flex; justify-content: center;">
        <table >
            <?php

            if ($_SESSION['array'] && $_SESSION['ganador']==false) {
                foreach ($_SESSION['array'] as $fila) {
                    echo "<tr>";
                    foreach ($fila as $value) {
                        if($value === 0){
                            echo '<td style="background-color: blue;"></td>';
                        }else{
                            if($value === 1){
                                echo '<td style="background-color: red;"></td>';
                            }else{
                                echo '<td style="background-color: yellow;"></td>';
                            }
                        }
                        
                    }
                    echo "</tr>";
                }
            }else{


                echo $_SESSION['res'];
                echo"<br>";
                echo"<br>";

                foreach ($_SESSION['array'] as $fila) {
                    echo "<tr>";
                    foreach ($fila as $value) {
                        if($value === 0){
                            echo '<td style="background-color: blue;"></td>';
                        }else{
                            if($value === 1){
                                echo '<td style="background-color: red;"></td>';
                            }else{
                                echo '<td style="background-color: yellow;"></td>';
                            }
                        }
                        
                    }
                    echo "</tr>";
                    
                }

            }
            ?>
            <form action="./index.php" method="post">
                <tr>
                    <?php

                    if($_SESSION['ganador']==true){
                        for ($i = 1; $i < 8; $i++) {
                            echo "";
                        }
                    }else{
                        for ($i = 1; $i < 8; $i++) {
                            echo '<td><button type="submit" name="boton" value="' . $i . '">+</button></td>';
                        }
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
            <!-- Boton de reiniciar partida-->
            <form action="./borrar.php" method="post">
                <button type="submit" name="borrar" value="1">Reinciar</button>
            </form>
        </div>
        <?php
        if($_SESSION['ganador'] !== true)
            echo"Turno: " . $_SESSION['turno'];
        ?>
        
    </div>

</body>

</html>