<?php 
session_start(); 
header("Location: ./index.php");



if($_POST){

    // Allar columna en la que se ejecuta el post
    foreach ($_POST as $nombre => $value) {
        $_SESSION['res']= $value;
    }

    $_SESSION['res'] = $value;

    if($_SESSION['turno'] == 1){

        for($i = 0; $i < 6; $i++){
            $_SESSION['array'][$i][$value] = 3;
        }
        $_SESSION['turno'] = 2;
        exit();

    }else{
        for($i = 0; $i < 6; $i++){
            $_SESSION['array'][$i][$value] = 3;
        }
        $_SESSION['turno']=1;
        exit();
    }
    
}


?>