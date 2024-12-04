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
        $m=0;
        $n=0;
        $suma = 0;
        for($i = 0; $i <=49; $i++){

            $valores[$i] = rand();
            $suma = $suma+$valores[$i];
        }

        for($i = 0; $i <=49; $i++){
            
            if($valores[$i] > $m){
                $m = $valores[$i];
            }else{

                if($valores[$i] < $n || $n === 0){
                    $n = $valores[$i];
                }

            }
            

        }

        echo "El valor maximo es: " . $m . "<br>"; 
        echo "El valor minimo es: " . $n . "<br>";
        echo "El valor medio es: ". ($suma / 50);

    ?>

    
</body>
</html>