<?php
$dir_subida = './ficheros/';
$fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);

//basename: muestra el nombre del fichero con la extensión

echo '<pre>';
if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
    echo "El fichero es válido y se subió con éxito.\n";
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}

echo 'Más información de depuración:';
print_r($_FILES);

print "</pre>";

?>