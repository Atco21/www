<?php

include('./connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>

<?php
 $sql = "select * from miCrud";

 $sentencia = $conexion -> prepare($sql);
 $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
 $sentencia -> execute();
 
 
 echo '<table border="1" cellpadding="10" style="text-align: center;">';
 echo "<tr><th>Id:</th><th>Nombre:</th><th>Email:</th><th>Numero:</th></tr>";
 


 while($fila = $sentencia->fetch()) {
     echo "<tr>";
     echo "<td>" . $fila['id'] . "</td>";       
     echo "<td>" . $fila['nombre'] . "</td>";   
     echo "<td>" . $fila['email'] . "</td>";    
     echo "<td>" . $fila['numero'] . "</td>";   
     echo '<td><form method="post" action="./delete.php"><button name="borrar" type=submit style="margin:2em;" value='.$fila['id'].'>Borrar</button></form></td>';
     echo "</tr>";
 }
 echo '</table>';

 ?>
 <form action="./"></form>
    


</body>
</html>