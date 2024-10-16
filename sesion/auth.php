<?php
session_start(); // Iniciar sesión
include('bd.php');

// Obtener los datos del formulario (POST)
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$encontrado = false;


$i = 0;

if (!empty($usuario) && !empty($password)) {
    
    while ($i < count($usuarios) && !$encontrado) {
        if ($usuarios[$i]['usuario'] == $usuario && $usuarios[$i]['password'] == $password) {
            
            
            $_SESSION['usuario'] = $usuario;
            $_SESSION['nombre'] = $usuarios[$i]['nombre'];
            $_SESSION['rol'] = $usuarios[$i]['rol'];
            
            
            header("Location: ./menu.php");
            exit(); 
        }
        $i++;
    }

    if (!$encontrado) {
        $_SESSION['error'] = "Usuario o contraseña incorrecta";
        header("Location: ./login.php");
        exit();
    }
} else {
    $_SESSION['error'] = "Debe proporcionar un usuario y una contraseña";

}
?>
