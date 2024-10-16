<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    $array1 = [['nombre'=>'Alfred', 'apellido'=>'Comanescu', 'ciudad' => 'Valencia', 'altura'=>'1.80', 'email'=>'tomascomanescu@gmail.com'],
    ['nombre'=>'Thomas', 'apellido'=>'Comanescu', 'ciudad' => 'Madrid', 'altura'=>'1.60', 'email'=>'comanThomas@gmail.com'],
    ['nombre'=>'Pepe', 'apellido'=>'Botella', 'ciudad' => 'León', 'altura'=>'1.50', 'email'=>'pepeRojo@gmail.com'],
    ['nombre'=>'Federico', 'apellido'=>'lolas', 'ciudad' => 'Barcelona', 'altura'=>'1.90', 'email'=>'el.lolas@gmail.com'],
    ['nombre'=>'Alma', 'apellido'=>'Crese', 'ciudad' => 'Sevilla', 'altura'=>'1.20', 'email'=>'almaCrese@gmail.com']];
    ?>

    <table border="1" cellspacing="0">
    <tr>
        <td style=padding:1.0em;><b>NOMBRE</b></td>
        <td style=padding:1.0em;><b>APELLIDO</b></td>
        <td style=padding:1.0em;><b>CIUDAD</b></td>
        <td style=padding:1.0em;><b>ALTURA</b></td>
        <td style=padding:1.0em;><b>EMAIL</b></td>
    </tr>
    
    <?php
        
    
       foreach ($array1 as $persona) {
            //print_r($persona);
            echo "<tr>";

                        
            foreach ($persona as $p => $v) {
                
                echo "<td style='padding:1.2em'>".$persona[$p]."</td>";
            }

            echo "</tr>";
       }

    ?>

    </table>

</body>
</html>