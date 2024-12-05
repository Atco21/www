<?php
include("./connection.php");

    if(isset($_POST['borrar'])) {

        $identificador = $_POST['borrar'];

        $sql = "DELETE FROM miCrud WHERE id = :idValor";

        $sentencia = $conexion->prepare($sql);    
        $sentencia->bindParam(":idValor", $identificador);  //asocia el $identicador a :idValor
        $isOk = $sentencia->execute();   
        header("Location: ./index.php");


    }


?>