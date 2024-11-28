<?php
$dir_subida = './ficheros/';


if (isset($_POST['eliminar'])) {
    $archivo_eliminar = basename($_POST['eliminar']);
    $ruta_eliminar = $dir_subida . $archivo_eliminar;

    if (file_exists($ruta_eliminar)) {
        if (unlink($ruta_eliminar)) {
            echo "Archivo eliminado con éxito: " . $archivo_eliminar . "<br>";
        }
    } else {
        echo "El archivo no existe: " . $archivo_eliminar . "<br>";
    }
}


if (isset($_FILES['fichero_usuario'])) {
    $fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);
    echo '<pre>';
    if ($_FILES['fichero_usuario']['error'] === UPLOAD_ERR_OK) {

        if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
            echo "El fichero es válido y se subió con éxito.\n";
        } else {
            echo "¡Posible ataque de subida de ficheros!\n";
        }
    } else {
        echo "Tipo de archivo no permitido. Solo se permiten imágenes.\n";
    }
}
echo '</pre>';



$archivos = scandir($dir_subida);

echo "<h3>Archivos en el directorio:</h3>";

for ($i = 2; $i < count($archivos); $i++) {
    $img = $dir_subida . $archivos[$i];

    if (is_file($img)) {
        echo '<img src="' . $img . '" width="100px" height="100px"><br>';

        echo '<form action="" method="post">';
        echo "<input type='hidden' name='eliminar' value='" . $archivos[$i] . "'>";
        echo "<input type='submit' value='Eliminar'>";
        echo '</form>';
    }
}
