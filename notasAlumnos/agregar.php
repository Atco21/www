<?php 

$dni = $_POST['dni'] . ',';

$asig = $_POST['asignatura'] . ',';

$nota = $_POST['nota'] . "\r\n";


  $fp = fopen('./notasalumnos.csv', 'a');
    fwrite($fp, $dni);
    fwrite($fp, $asig);
    fwrite($fp, $nota);
    fclose($fp);

    header("Location: ./index.php");

?>