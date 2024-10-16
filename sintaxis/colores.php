<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




<?php





    echo "<table>";

    

        echo "<tr>";

        for($r = 0; $r <= 250; $r += 50){

            for($g = 0; $g <= 250; $g+=50){

                for($b = 0; $b <=250; $b+=50){

                    $red = dechex($r);
                    $green = dechex($g);
                    $blue = dechex($b);

                    //$total = $red+$green+$blue;

                    echo "<td style='background-color:rgb($r, $g, $b); padding:1.2em'>#".$red, $green, $blue."</td>";


                }

                echo "</tr>";
               
            }
        }

        echo "</table>";
        
       







?>








    
</body>
</html>