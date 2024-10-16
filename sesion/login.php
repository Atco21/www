<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>


    
<div style="margin:2em; display: flex;">
    <form action='./auth.php' method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" placeholder="Usuario">

        <label>Contraseña:</label>
        <input type="password" id="password" name="password" placeholder="Contraseña">

        <input type="submit" name="inicioSesion" value="Iniciar sesión">
    </form>
</div>

    <?php

        if(isset($_SESSION['error'])){

            echo "<p>";

            echo "".$_SESSION['error'];

            echo "</p>";
            
        }
        unset($_SESSION['error']);
        
        
    ?>

</body>
</html>
