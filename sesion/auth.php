<?php
session_start(); // Iniciar sesión
include('bd.php');
 
// Obtener los datos del formulario (POST)
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$encontrado = false;

//revisar para que no haga mas comprobaciones que las necesarias, es decir, con

if(!empty($usuario) && !empty($password)){

    while($encontrado == true){




    }


} else {
    $_SESSION['error'] = "usuario o contraseña incorrecta";
}
?>
