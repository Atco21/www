<?php
session_start(); // Iniciar sesión
include('bd.php');
 
// Obtener los datos del formulario (POST)
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$encontrado = false;

print_r($usuarios);

$i=0;

if (!empty($usuario) && !empty($password)) {
    
    while ($i < count($usuarios) && !$encontrado) {
        if ($usuarios[$i]['usuario'] == $usuario && $usuarios[$i]['password'] == $password) {
            $encontrado = true; 
        }
        $i++;
    }

    if (!$encontrado) {
    
        $_SESSION['error'] = "usuario o contraseña incorrecta";
    }
} else {

    $_SESSION['error'] = "Debe proporcionar un usuario y una contraseña";
}
?>
