<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    
        $valores =[];

        for($i = 0; $i <=49; $i++){

            $valores[$i] = rand();

        }

        sort($valores);
        echo "Valores de manera ascendente: ";
        for($i = 0; $i <= 49; $i++){

            
            echo $valores[$i] . ", ";
            

        }

        echo "<br>";
        echo "<br>";

        rsort($valores);
        echo "Valores de manera descendente: ";
        for($i = 0; $i <= 49; $i++){

            
            echo $valores[$i] .", ";

        }



    ?>

    
</body>
</html>