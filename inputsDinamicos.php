<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <?php

        $numInputs = rand(1, 10);

    ?>
    <form method="post"  action="./recibirInputs.php">
        <?php

            for($i = 0; $i <= $numInputs; $i++){
               ?>

                <p> Ingresa numero: <input type="number" name="numeros[]"></p>
          <?php      
            }
            echo "<input type='submit' name='boton' value='enviar'>";
        ?>


    </form>




    




</body>
</html>