<?php 
session_start();


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="login-container">
    <form action='./auth.php' method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" placeholder="Usuario" required
        <?php 
        
        if (isset($_COOKIE['recordar'])) {
            echo 'value="' . $_COOKIE['recordar'] . '"';
        }
        ?>>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" placeholder="Contraseña" required>

        <label>
            Recordar
            <input type="checkbox" name="recordar">
        </label>

        <input type="submit" name="inicioSesion" value="Iniciar sesión">
    </form>

    <?php

    if (isset($_SESSION['error'])) {
        echo "<p class='error-message'>" . $_SESSION['error'] . "</p>";
        unset($_SESSION['error']);  
    }
    ?>
</div>

</body>
</html>
