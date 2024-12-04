<?php   
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<div style=" margin:2em; align-items: center;">
    <form method="post">
        <label>Tele</label>
        <label>precio 100euros</label> 
        <br>
        <input type="number" name="vTele"><input type="submit" value="comprar">

        <br>

        <label>raton</label>
        <label>precio 5 euros</label> 
        <br>
        <input type="number" name="vRaton"><input type="submit" value="comprar">
    
        <br>

        <label>teclado</label>
        <label>precio 10 e</label> 
        <br>
        <input type="number" name="vTeclado"><input type="submit" value="comprar">
    
        <br>

        <label>cpu</label>
        <label>precio 200 euros</label> 
        <br>
        <input type="number" name="vCpu"><input type="submit" value="comprar">



        <input type="submit" value="Eliminar sesiones">
    </form>
</div>


<?php
    
    if(!empty($_POST['vTele'])){
        $_SESSION['tele'] = $_POST['vTele'];
    }
    if(!empty($_POST['vRaton'])){
        $_SESSION['raton'] = $_POST['vRaton'];
    }

    if(!empty($_POST['vTeclado'])){
        $_SESSION['teclado'] = $_POST['vTeclado'];
    }

    if(!empty($_POST['vCpu'])){
        $_SESSION['cpu'] = $_POST['vCpu'];
    }



   
    
    print_r($_SESSION);

?>
    
</body>
</html>