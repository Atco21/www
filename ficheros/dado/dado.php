<?php
session_start();


if (!isset($_SESSION['array'])) {
    $_SESSION['array'] = [0, 0, 0, 0, 0, 0, 0];
}
if (!isset($_SESSION['aciertos'])) {
    $_SESSION['aciertos'] = 0;
}
if (!isset($_SESSION['fallos'])) {
    $_SESSION['fallos'] = 0;
}


    if(isset($_POST['borrar'])){

        $_SESSION['array']=[0, 0, 0, 0, 0, 0, 0];
        $_SESSION['aciertos'] = 0;
        $_SESSION['fallos'] = 0;
    }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <title>Document</title>
</head>

<body>
    <div id="mDados">

        <p>El dado lanzado es: </p>
        <?php
        if (isset($_SESSION['valorR'])) {
            print_r($_SESSION['valorR']);
        }
        ?>
    </div>


    <?php
    if (isset($_SESSION['num'])) {
        echo $_SESSION['num'];
    }
    echo "<br>";
    print_r($_SESSION['array']);
    echo "<br>";
    echo "Aciertos: " . $_SESSION['aciertos'];
    echo "<br>";
    echo "Fallos: " . $_SESSION['fallos'];
    echo "<br>";
    ?>
    <br>
    <form action="" method="post">
        <input type="submit" value="lanzar" name="lanzar">
        <input type="submit" value="borrar" name="borrar">
    </form>


    <?php
    if(isset($_POST['borrar'])){
       session_destroy();
    }else{

        if (!isset($_SESSION['num'])) {
            $_SESSION['num'] = random_int(0, 6);
        } else {
            $_SESSION['num'] = random_int(0, 6);
        }
    
    
    
        if ($_SESSION['array'][$_SESSION['num']] == 1) {
            $_SESSION['fallos'] += 1;
        } else {
            $_SESSION['array'][$_SESSION['num']] = 1;
            $_SESSION['aciertos'] += 1;
        }

    
    }

    ?>






</body>

</html>