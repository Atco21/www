<?php 
session_start(); 


function verGanador($turno){
    
    $_SESSION['res']=$turno;

}

if($_POST['boton']){
    header("Location: ./index.php");

    // Allar columna en la que se ejecuta el post
    foreach ($_POST as $nombre => $value) {
        
    }

    if($_SESSION['turno'] == 1){

        $encontrado = false;

        $i = 5;

        while(!$encontrado && $i>=0){

            if($_SESSION['array'][$i][$value-1] === 0){
                $_SESSION['array'][$i][$value-1] = 1;
                verGanador($_SESSION['turno']);
                $_SESSION['turno'] = 2;
                


                $encontrado = true;
                
            }
            $i--;
        }
     

    }else{
        $encontrado2 = false;
        $i = 5;
        while(!$encontrado2 && $i>=0){

            if($_SESSION['array'][$i][$value-1] === 0){
                $_SESSION['array'][$i][$value-1] = 2;
                verGanador($_SESSION['turno']);
                $_SESSION['turno'] = 1;
                $encontrado2 = true;
            }
            $i--;
        }
    }      
}




?>