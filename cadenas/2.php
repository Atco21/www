<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    $cadena = "escribe una codigo que tranforme esta frase";
    $res="";
    for($i = 0; $i<strlen($cadena); $i++){

        if(($i % 2)===0){
            
        }else{
            $res[$i] =  strtoupper($cadena[$i]);
        }
    }
    echo $res;

?>
    
</body>
</html>