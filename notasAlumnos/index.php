<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
        
        <form action="./agregar.php" method="post" class="w-40" style="border: 1px solid gray; padding: 30px; border-radius: 20px">

        <p>DNI: </p><input type="text" name="dni">
        <br>
        <p>Asignatura: </p><input type="text" name="asignatura"></label>
        <br>
        <p>Nota: </p><input type="text" name="nota"></label>

        <br><br>

        <div class="d-flex justify-content-center"> 

        <input type="submit" class="btn btn-primary w-100" value="Agregar">

        </div>

        <br>

        <div class="d-flex justify-content-center"> 

            <a href="./mostrar.php"><input type="button" class="btn btn-secondary flex-grow-1 mx-2" style="width: 100px;" value="Mostrar"></a>
            <a href="./grafica.php"><input type="button" class="btn btn-secondary flex-grow-1 mx-2" style="width: 100px;" value="Grafica"></a>

        </div>

        </form>

    </div>
    



</body>
</html>