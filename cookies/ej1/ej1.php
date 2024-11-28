<?php
ob_start();
setcookie('inicio', 1, time() + 31536000); // Duración de 1 año para 'inicio'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="background-color:blue; padding:3em; color:white">000
        <p>
            <?php
                // Verificar si la cookie 'veces' existe
                if (!isset($_COOKIE['veces'])) {
                    echo "Bienvenido por primera vez";
                    setcookie('veces', 1, time() + 31536000); // Establecemos 'veces' con duración de 1 año
                } else {
                    echo "Ya está de vuelta";
                    $veces = $_COOKIE['veces'] + 1; // Incrementamos el contador
                    setcookie('veces', $veces, time() + 31536000); // Actualizamos la cookie con el nuevo valor
                    echo "<br>Has visitado esta página $veces veces.";
                }
            ?>
        </p>
    </div>
</body>
</html>
