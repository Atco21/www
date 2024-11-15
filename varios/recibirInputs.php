<?php
    $suma=0;
    $numeros = $_POST['numeros']; 
    $i=0;
    foreach($numeros as $numero) {
    
        $suma += $numero;
        if($i != count($numeros) -1){
            echo $numero . " + "; 
        }else{
            echo $numero . " = " ;
        }


        $i++;
    }
    echo " ".$suma ;
?>