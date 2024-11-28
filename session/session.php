<?php   
session_start();


if(isset($_POST['eliminar'])){
    session_destroy();
    session_start();

    $_SESSION['tele']=0;
    $_SESSION['raton']=0;
    $_SESSION['teclado']=0;
    $_SESSION['cpu']=0;
    
}





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
        <input type="number" name="vTele"><button name="comprar">Comprar</button>

        <br>

        <label>raton</label>
        <label>precio 5 euros</label> 
        <br>
        <input type="number" name="vRaton"><button name="comprar">Comprar</button>
    
        <br>

        <label>teclado</label>
        <label>precio 10 e</label> 
        <br>
        <input type="number" name="vTeclado"><button name="comprar">Comprar</button>
    
        <br>

        <label>cpu</label>
        <label>precio 200 euros</label> 
        <br>
        <input type="number" name="vCpu"><button name="comprar">Comprar</button>



        <input type="submit" name="eliminar" value="Eliminar sesiones">
    </form>
</div>


<?php
    
    if(!empty($_POST['vTele'])){
        $_SESSION['tele'] += $_POST['vTele'];
        $_POST['vTele']=0;
      
    }
    if(!empty($_POST['vRaton'])){
        $_SESSION['raton'] = $_POST['vRaton'];
        $_POST['vRaton']=0;
    }

    if(!empty($_POST['vTeclado'])){
        $_SESSION['teclado'] = $_POST['vTeclado'];
        $_POST['vTeclado']=0;
    }

    if(!empty($_POST['vCpu'])){
        $_SESSION['cpu'] = $_POST['vCpu'];
        $_POST['vCpu']=0;
    }
    
    print_r($_SESSION);
    echo "<br> <br>";

echo " tele:" . "->".$_SESSION["tele"]."<br>";
?>
<button name="bTele">borrar</button><br><br>


<?php
echo "raton:" . "->".$_SESSION["raton"]."<br>";
?>
<button name="bRaton">borrar</button><br><br>
<?php
echo "teclado:" . "->".$_SESSION["teclado"]."<br>";
?>
<button name="bTeclado">borrar</button><br><br>
<?php
echo "cpu:" . "->".$_SESSION["cpu"]."<br>";
?>
<button name="bCpu">borrar</button><br><br>

</body>
</html>