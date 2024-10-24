
<?php 
   




$array = []; // Para almacenar las puntuaciones totales por materia
$asg = [];   // Para almacenar el conteo de asignaciones por materia

// Abrir el archivo CSV
$fitxer = fopen("notasalumnos.csv", "r");

if ($fitxer) {
    while (!feof($fitxer)) {
        $line = fgets($fitxer);
        if (!empty($line)) {
            $porciones = explode(",", $line);

            // Asegurarse de que hay al menos 3 elementos (ID del alumno, asignatura, puntuación)
            if (isset($porciones[0]) && isset($porciones[1]) && isset($porciones[2])) {
                $asignatura = ($porciones[1]);  // Asignatura
                $nota = (float)($porciones[2]); // Nota, convertida a float

                // Validar la nota
                if (is_numeric($nota) && $nota >= 0 && $nota <= 10) {
                    // Inicializar los arreglos para las materias si no existen
                    if (!isset($array[$asignatura])) {
                        $array[$asignatura] = 0; // Puntuación total para la materia
                        $asg[$asignatura] = 0;   // Conteo de asignaciones para la materia
                    }

                    $array[$asignatura] += $nota; // Agregar la puntuación total para la materia
                    $asg[$asignatura] += 1;       // Incrementar el conteo de asignaciones para la materia
                }
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

</head>
<body class="d-flex justify-content-center align-items-center bg-light flex-column">

<h2 class="p-2">Resumen de Notas y Asignaciones</h2>
<a href="notas.php"><input type="button" value="Volver" class="btn btn-secondary mb-2"></a>
<table border="1" class="table w-50 text-center">
    <tr>
        <th>Asignatura</th>
        <th>Número de Asignaciones</th>
        <th>Nota Media</th>
    </tr>
    <?php foreach ($array as $asignatura => $totalScore){ ?>
    <tr>
        <td><?php echo htmlspecialchars($asignatura); ?></td>
        <td><?php echo htmlspecialchars($asg[$asignatura]); ?></td>
        <td>
            <?php 
            // Calcular la nota media
            $notaMedia = $totalScore / $asg[$asignatura];
            echo htmlspecialchars(number_format($notaMedia, 2)); // Formatear a 2 decimales
            ?>
        </td>
    </tr>
    <?php }?>
</table>

        <a href="notas.php"><input type="button" value="Volver" class="btn btn-secondary mb-2"></a>

</body>
</html>