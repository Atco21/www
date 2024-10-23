<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php


 $fitxer=fopen("notasalumnos.csv", "r");
    while(!feof($fitxer)){
       $line = fgets($fitxer);


       list($dni, $asg, $nota) = explode(",", $line);


       $datos = [

        ];
       echo $asg;
       echo "<br>";
    }
    fclose($fitxer);
?>






</body>
</html>