

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de Notas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

</head>
<body>

<body class="d-flex justify-content-center align-items-center vh-100 bg-light">

    <form action='./aniadir.php' method="post" class="d-flex flex-column align-items-center w-25 p-4 border rounded shadow">
        <div class="form-group w-100 mb-3">
            <label for="dni">ID</label>
            <input type="text" id="dni" name="dni" class="form-control p-2" placeholder="Introduce DNI del alumno (00000 - 99999)" >
        </div>

        <div class="form-group w-100 mb-3">
            <label for="asignatura">Asignatura</label>
            <input type="text" id="asignatura" name="asignatura" class="form-control" placeholder="Introduce la asignatura" >
        </div>

        <div class="form-group w-100 mb-3">
            <label for="nota">Nota</label>
            <input type="number" id="nota" name="nota" class="form-control" step="0.1" min="0" max="10" placeholder="Introduce la nota">
        </div>

        <input type="submit" value="añadir" name="aniadir" class="btn btn-success w-100 mb-2">
        <a href="tabla"><input type="submit" value="Tabla" name="tabla"  class="btn btn-primary w-100 mb-2"></a>
        <input type="submit" value="Gráfica" name="grafica" class="btn btn-secondary w-100 mb-2">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</body>
</html>
