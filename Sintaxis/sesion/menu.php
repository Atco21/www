<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p style="text-align: left; margin-top: 2em; margin-left: 5em;">BIENVENIDO: <?php echo $_SESSION['nombre'];?><a href="./salir.php">Cerrar Sesion</a></p>


<?php
    if($_SESSION['rol'] == 'ROLE_PROFE'){
?>
        <div class="profesor" style="background-color: blue; padding: 2em; border-radius: 1.2em; margin:5em; text-align: center; ">
            <p>PROFESOR</p>
        </div>
<?php
}
?>

<?php
    if($_SESSION['rol'] == 'ROLE_ALUMNO'){
?>
        <div class="profesor" style="background-color: red; padding: 2em; border-radius: 1.2em; color:white; margin:5em; text-align: center; ">
            <p>ALUMNO</p>
        </div>
<?php
}
?>

</body>
</html>
