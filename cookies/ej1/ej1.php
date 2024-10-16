<?php
ob_start();
setcookie('inicio', 1, time() + 2); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="background-color:blue; padding:3em; color:white">
        <p>
            <?php
                // Verificar si es la primera vez que accede
                if (!isset($_COOKIE['inicio'])) {
                    echo "Bienvenido por primera vez";
                    
                    // Establecemos la cookie 'veces' en 1 si es la primera vez
                    setcookie('veces', 1, time() + 31536000); // 1 año
                } else {
                    echo "Ya está de vuelta";

                    // Verificamos si la cookie 'veces' existe
                    if (isset($_COOKIE['veces'])) {
                        // Incrementamos el valor de la cookie
                        $veces = $_COOKIE['veces'] + 1;
                    } else {
                        // Si no existe la cookie, la inicializamos en 1
                        $veces = 1;
                    }

                    // Actualizamos la cookie 'veces' con el nuevo valor
                    setcookie('veces', $veces, time() + 31536000); // 1 año

                    // Mostrar el número de veces que ha accedido
                    echo "<br>Has visitado esta página $veces veces.";
                }
            ?>
        </p>
    </div>
</body>
</html>
