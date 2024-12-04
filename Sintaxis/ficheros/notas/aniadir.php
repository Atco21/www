<?php
header("Location: ./notas.php");
$fp = fopen("notasalumnos.csv", "a");
if ($fp) {

    $dni = $_POST['dni']. ",";
    $asg = $_POST['asignatura']. ",";
    $nota = $_POST['nota'];

    fwrite($fp, $dni);
    fwrite($fp, $asg);
    fwrite($fp, $nota);

    fclose($fp);


}


?>