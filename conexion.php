<?php
$dsn = 'mysql:dbname=dbname;host=db:3306'; //nombre Base datos y dónde está la BD
$usuario = 'test';
$contrasena = 'test';

try {

$conexion = new PDO($dsn, $usuario, $contrasena);
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Conexión Establecida con la BD en Docker";

// $sql = "INSERT INTO miTabla (nombre, email, edad) VALUES ('Julio', 'julio@gmail.com','65')";
//     $conexion->exec($sql);
//     echo "Nuevo registro creado Correctamente";

// esto no se hace NO RECOMENDABLE



// $nombre = $_POST["nombre"] ?? "Pepito";         //si NO recibe ningún valor del POST, asigna valor por defecto "Julio"
// $email = $_POST["email"] ?? "pepito@gmail.com";
// $edad = $_POST["edad"] ?? "104";

// $sql = "INSERT INTO miTabla(nombre, email, edad) VALUES (:nombre, :email, :edad)";

// $sentencia = $conexion->prepare($sql);
// $sentencia->bindParam(":nombre", $nombre);
// $sentencia->bindParam(":email", $email);
// $sentencia->bindParam(":edad", $edad);
// $isOk = $sentencia->execute();                        // ejecuta la sentencia y devuelve comprobación que todo es ok

// $idGenerado = $conexion->lastInsertId();      //devuelve el último campo en miTabla
// echo $idGenerado;


// $sql = "select * from miTabla";

// $sentencia = $conexion -> prepare($sql);
// $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
// $sentencia -> execute();

// while($fila = $sentencia -> fetch()){      //vamos recorriendo fila a fila
//     echo "Id:" . $fila["id"] . "<br />";
//     echo "Nombre:" . $fila["nombre"] . "<br />";
//     echo "Email:" . $fila["email"] . "<br />";
//     echo "Edad:" . $fila["edad"] . "<br />";
// }

// $id=1;
// $sql="SELECT * FROM miTabla WHERE id=:id";
// $sentencia = $conexion->prepare($sql);
// $sentencia->bindParam(':id', $id);
// $sentencia->setFetchMode(PDO::FETCH_ASSOC);
// $sentencia->execute(); 
// $fila= $sentencia->fetch();

// print_r($fila);

$identificador = $_GET["id"] ?? 1;              //si No recibe ningún valor del $_GET asigna 0.

    $sql = "DELETE FROM miTabla WHERE id = :idValor";

    $sentencia = $conexion->prepare($sql);    
    $sentencia->bindParam(":idValor", $identificador);  //asocia el $identicador a :idValor
    $isOk = $sentencia->execute();                      //borra los valores

    $cantidadAfectada = $sentencia->rowCount();  //Devuelve el número de filas afectadas por la última sentencia SQL
    echo $cantidadAfectada;
}

catch (PDOException $e) { //en caso de detectar un error lo muestra
echo 'Falló la conexión: ' . $e->getMessage();
}

$conexion = null; //cierra conexión
?>