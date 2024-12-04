<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero</title>
</head>
<body>

<?php

$numero = "123456";
$cad = ""; 
$cont = 0;


for($i = strlen($numero) - 1; $i >= 0; $i--){
    
    $cad = $numero[$i].$cad;
    $cont++;

    if($cont == 3 && $i!=0){
        $cad = ".".$cad;
        $cont = 0;
    }
}

echo $cad;

?>

    
</body>
</html>