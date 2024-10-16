<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_POST['boton'])) {
            // Captura los valores enviados por el formulario
            $nombre = isset($_POST['nombre']);       
            $apellido = isset($_POST['apellido']);
            $password = isset($_POST['password']);
            $rol = isset($_POST['rol']);        
            $actividades = [];
            if (isset($_POST['EF'])) $actividades[] = "Educación Física";
            if (isset($_POST['mates'])) $actividades[] = "Matemáticas";
            if (isset($_POST['Lengua'])) $actividades[] = "Lengua Castellana";
            if (isset($_POST['Valenciano'])) $actividades[] = "Valenciano";
            $genero = isset($_POST['m']);
            $color = isset($_POST['color']);          
            $edad = isset($_POST['edad']);      
            $comentarios = isset($_POST['textarea']);

            // Muestra los datos en una tabla
            echo "<h2>Datos Enviados</h2>";
            echo "<table border='1'>";
            echo "<tr><th>Campo</th><th>Valor</th></tr>";
            echo "<tr><td>Nombre</td><td>$nombre</td></tr>";
            echo "<tr><td>Apellido</td><td>$apellido</td></tr>";
            echo "<tr><td>Contraseña</td><td>$password</td></tr>";
            echo "<tr><td>Rol</td><td>$rol</td></tr>";
            echo "<tr><td>Actividades</td><td>" . implode(', ', $actividades) . "</td></tr>";
            echo "<tr><td>Género</td><td>$genero</td></tr>";
            echo "<tr><td>Color favorito</td><td>$color</td></tr>";
            echo "<tr><td>Edad</td><td>$edad</td></tr>";
            echo "<tr><td>Comentarios</td><td>$comentarios</td></tr>";
            echo "</table>";
        }else{
        ?>

        <form method="post">
            <label>Nombre:</label>
            <input type="text" name="nombre" value ="">
            <br>
            <label>Apellido</label>
            <input type="text" name="apellido" value="">
            <br>
            <label>Contraseña</label>
            <input type="password" name="password" value="">
            <br>
            <label>Rol: </label>
            <select name="rol">
                <option value="">Elige rol</option>
                <option value="alumno">Alumno</option>
                <option value="profesor">profesor</option>
            </select>
            <br>
            <p>Actividades: </p>
            <label>Educación Física<input type="checkbox" name="EF" id=""></label>
            <label>Matemáticas <input type="checkbox" name="mates" id=""></label>
            <label>Lengua Castellana<input type="checkbox" name="Lengua" id=""></label>
            <label>Valenciano<input type="checkbox" name="Valenciano" id=""></label>
            </p>
            <p>Género: </p>
            <label>Hombre<input type="radio" name="m"></label>
            <label>Mujer<input type="radio" name="f"></label>
            <p>Color: <input type="color" name="color"></p>
            <p>Edad: <input type="number" min="18" max="99"></p>
            <p>Comentarios<br>
            <textarea name="textarea" rows="10" cols="50"></textarea>
            </p>
            <input type="submit" name="boton" value="enviar">

        </form>
        <?php
            }
        ?>
</body>
</html>