<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLERO DE AJEDREZ</title>
</head>
<body>

<table border="1" cellspacing="1">
    <?php

        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 10; $j++) {

                if($i === 1){
                    echo "<td style='background-color: blue;  color:white; padding:1.2em'>" . ($i * $j) . "</td>";
                }else{
                    
                    if($j === 1){
                        echo "<td style='background-color: red; color:white; padding:1.2em'>" . ($i * $j) . "</td>";
                    }else{
                        echo "<td style='padding:1.2em'>" . ($i * $j) . "</td>";
                    }
                }
            }
            
            echo "</tr>";
        }   
    ?>

</table>

</body>
</html>