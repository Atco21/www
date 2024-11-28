<?php
session_start();

// Inicialización de variables de sesión
if (!isset($_SESSION['array'])) {
    $_SESSION['array'] = [0, 0, 0, 0, 0, 0, 0];
}
if (!isset($_SESSION['aciertos'])) {
    $_SESSION['aciertos'] = 0;
    $_SESSION['valorR'] = 0;
}
if (!isset($_SESSION['fallos'])) {
    $_SESSION['fallos'] = 0;
}

// Gestión de acciones del formulario
if (isset($_POST['borrar'])) {
    $_SESSION['array'] = [0, 0, 0, 0, 0, 0, 0];
    $_SESSION['aciertos'] = 0;
    $_SESSION['fallos'] = 0;
    $_SESSION['valorR'] = 0;
} elseif (isset($_POST['lanzar'])) {
    $_SESSION['num'] = random_int(0, 6);

    if ($_SESSION['array'][$_SESSION['num']] == 1) {
        $_SESSION['fallos'] += 1;
    } else {
        $_SESSION['array'][$_SESSION['num']] = 1;
        $_SESSION['aciertos'] += 1;
    }

    $_SESSION['valorR'] = $_SESSION['num']; // Guardar el valor del dado
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego del Dado</title>
</head>

<body>
    <div id="mDados">
        <p>El dado lanzado es: <?php echo $_SESSION['valorR']; ?></p>
    </div>

    <p>Dados:
        
    
    <?php 
        echo "<tr>";

        for($i = 0; $i<=5;$i++){
            if($_SESSION['array'][$i]==1){
                $dado = $i+1;
                echo '<td><img src=./dados/dado'.$dado.'.png></td>';
            }else{
                echo '<td><img src=./dados/dado0.png></td>';
            }
            echo "</tr>";
        }
    ?>
        
    
    
    
    
    
    </p>
    <p>Aciertos: <?php echo $_SESSION['aciertos']; ?></p>
    <p>Fallos: <?php echo $_SESSION['fallos']; ?></p>

    <form action="" method="post">
        <input type="submit" value="lanzar" name="lanzar">
        <input type="submit" value="borrar" name="borrar">
    </form>
</body>

</html>
