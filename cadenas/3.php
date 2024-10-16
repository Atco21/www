<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    $cadena = "hola Pedro";
    
    $tLetras=0;
    $tPalabras=1;

    for($i = 0; $i<strlen($cadena); $i++){

        if($cadena[$i]===" "){
            $tPalabras++;
        }else{
            $tLetras++;
        }

    }

    $partes = explode(" ", $cadena);

    echo "Numero de letras: $tLetras <br>";
    echo "Numero de palabras: $tPalabras <br> <br>";
   
    for($i = 0; $i<$tPalabras; $i++){

        echo $partes[$i] ." => ". strlen($partes[$i]);
        echo "<br>";
            

    }

?>
    
</body>
</html>