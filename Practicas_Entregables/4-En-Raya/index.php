<?php
session_start();
if (!isset($_SESSION['array'])) {

    $_SESSION['array'] = [];

    //$i fila

    //$j columna 


    for ($i = 0; $i < 6; $i++) {
        for ($j = 0; $j < 7; $j++) {

            $_SESSION['array'][$i][$j] = 0;
        }
    }
    $_SESSION['res'] = "";
}

if (!isset($_SESSION['turno'])) {

    $_SESSION['turno'] = 1;
}



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
                }
            }
        }
    }


}


if(isset($_POST['boton'])){

        $encontrado = false;

        $i = 5;
        $value = $_POST['boton'];
        print_r($_POST['boton']);

        while(!$encontrado && $i>=0){

            if($_SESSION['array'][$i][$value-1] === 0){
                
                
                if($_SESSION['turno'] ==1){
                    $_SESSION['array'][$i][$value-1] = 1;
                    verGanador($_SESSION['turno']);
                    $_SESSION['turno'] = 2;
                    
                }else{
                    $_SESSION['array'][$i][$value-1] = 2;
                    verGanador($_SESSION['turno']);
                    $_SESSION['turno']= 1;
                    
                }
                


                $encontrado = true;
                
            }
            $i--;
        }
     
    }






?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4-En_Raya</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>



    <div style="display: flex; justify-content: center;">
        <table >
            <?php
            if ($_SESSION['array']) {
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
            echo"Turno: " . $_SESSION['turno'];
            echo "<br>";
            echo $_SESSION['res'];

        ?>
        
    </div>

</body>

</html>