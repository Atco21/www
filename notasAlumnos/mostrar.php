
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    
</head>
<body>
    <h1>Medias por notas</h1>

<table>

<tr>

<td>Asignatura</td>
<td>Alumnos</td>
<td>Media</td>

</tr>

<?php

$datos = [];

$fitxer = fopen("notasalumnos.csv", "r");

while(!feof($fitxer)){
    $line = fgets($fitxer);
    
    // Separamos la linea para las diferentes variables
    $cadena = explode(',', $line);

    if (count($cadena) == 3) {
        $dni = $cadena[0];
        $asig = $cadena[1];
        $nota = $cadena[2];

        if(!isset($datos[$asig])){

            $datos[$asig]['total_alumnos'] = 0;
            $datos[$asig]['suma_notas'] = 0;

        }
        
    

    $datos[$asig]['total_alumnos'] += 1;
    $datos[$asig]['suma_notas'] += $nota;

    }

}
fclose($fitxer);

// Recorremos el array para mostrar los datos
foreach ($datos as $asig => $info) {
    $media = $info['suma_notas'] / $info['total_alumnos']; // Calculamos la media

    echo '<tr>';

    echo "<td>" . $asig . "</td>";
    echo "<td>" . $info['total_alumnos'] . "</td>";
    echo "<td>" . number_format($media, 2) . "</td>";

    echo '</tr>';
}

?>

</tr>

</table>
    
</body>
</html>


