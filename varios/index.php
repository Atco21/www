<?php

setcookie("valor","Alfred", time() + 1 );    
//time() tiempo desde que se originó unix+ 30 segundos

//print_r($_COOKIE);    //no muestra todas las cookies por temas de seguridad

echo $_COOKIE['valor'];

echo"<br>";
print_r($_COOKIE); 

unset($_COOKIE);





echo "<br>";
?>