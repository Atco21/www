<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">

<?php
$nombre = "Alfred Thomas";
$apellidos = "Comanescu";
$email = "tomascomanescu@gmail.com";
$nacimiento = "07/06/2005";
$tlf = 666666;

?>

<tr>
    <td>Nombre</td>
    <td><?php echo $nombre ?></td>
</tr>
<tr>
    <td>Apellidos</td>
    <td><?php echo $apellidos?></td>
</tr>
<tr>
    <td>Email</td>
    <td><?php echo $email?></td>
</tr>
<tr>
    <td>Año de nacimiento</td>
    <td><?php echo $nacimiento?></td>        
</tr>
<tr>
    <td>Teléfeno</td>
    <td><?php echo $tlf?></td>
</tr>


</table>
</body>
</html>

