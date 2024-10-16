<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<?php
    $robot= "1 5W;1 1|2 1x1 1x2 1|;1@4 1U4 1@;1 1|2 3=2 1|;2 1\\5_1/";
    $lineas = explode(";", $robot);
    for ($i=0; $i < count($lineas); $i++) { 

        $linea = $lineas[$i];

        for($j = 0; $j <strlen($linea);$j+=2){

            $e = $linea[$j];

            for($k = 1; $k <= $e; $k++){
                echo "&nbsp;".$linea[$j+1];
            }
        }
        echo "<br>";
    }
?>
</body>
</html>