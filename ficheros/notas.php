<?php 

$array = []; // Para almacenar las puntuaciones totales por materia
$asg = [];   // Para almacenar el conteo de asignaciones por materia

// Abrir el archivo CSV
$fitxer = fopen("notasalumnos.csv", "r");

if ($fitxer) {
    // Leer el archivo CSV
    while (!feof($fitxer)) {
        $line = fgets($fitxer);
        // Comprobar si la línea no está vacía
        if (!empty($line)) {
            $porciones = explode(",", trim($line));

            // Asegurarse de que hay al menos 3 elementos (materia, ID del alumno, puntuación)
            if (isset($porciones[0]) && isset($porciones[1]) && isset($porciones[2])) {
                $asginatura = $porciones[1];  // Asignatura
                $numeroAlu = $porciones[2]; //Nota
                $score = is_numeric($porciones[2]) ? (float)$porciones[2] : 0; // Validar y convertir la puntuación a float

                // Inicializar los arreglos para las materias si no existen
                if (!isset($array[$asginatura])) {
                    $array[$asginatura] = 0; // Puntuación total para la materia
                    $asg[$asginatura] = 0;   // Conteo de asignaciones para la materia
                }
                
                $array[$asginatura] += $score; // Agregar la puntuación total para la materia
                $asg[$asginatura] += 1;       // Incrementar el conteo de asignaciones para la materia
            }
        }
    }
    fclose($fitxer);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de Notas</title>
</head>
<body>

<h2>Resumen de Notas y asignaturas</h2>

<table border="1">
    <tr>
        <th>Asignatura</th>
        <th>Número de Asignaciones</th>
        <th>Nota Media</th>
    </tr>
    <?php foreach ($array as $asginatura => $totalScore): ?>
    <tr>
        <td><?php echo $asginatura; ?></td>
        <td><?php echo $asg[$asginatura]; ?></td>
        <td>
            <?php 
            // Calcular la nota media
            $notaMedia = $asg[$asginatura]= $totalScore / $asg[$asginatura]; 
            echo htmlspecialchars(number_format($notaMedia, 2)); // Formatear a 2 decimales
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
