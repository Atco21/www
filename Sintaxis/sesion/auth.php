<?php
session_start(); 
include('bd.php');


if (isset($_POST['usuario']) && isset($_POST['password'])) {
    
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];


    if (isset($_POST['recordar'])) {
        $recordar = $_POST['recordar'];
    } else {
        $recordar = null;
    }
    
    $encontrado = false;
    $i = 0;

    if (!empty($usuario) && !empty($password)) {
        while ($i < count($usuarios) && !$encontrado) {
            if ($usuarios[$i]['usuario'] == $usuario && $usuarios[$i]['password'] == $password) {
                
                if($_SESSION['rol'] == 'ROLE_PROFE'){

                    setcookie('usuario', $usuario, time() +100);
                    setcookie('password', $password, time() +100);
                    

                }else{
                    
                    setcookie('usuario', $usuario, time() +100);
                    setcookie('password', $password, time() +100);

                }

                
                $_SESSION['usuario'] = $usuario;
                $_SESSION['nombre'] = $usuarios[$i]['nombre'];
                $_SESSION['rol'] = $usuarios[$i]['rol'];

                
                if ($recordar) {
                    setcookie('recordar', $usuario, time() + (86400 * 30));
                }else{

                    if(isset($_COOKIE['recordar'])){
                        setcookie('recordar', '', time() - 3600);
                    }

                }

                
                header("Location: ./menu.php");
                $encontrado = true;
                exit(); 
            }
            $i++;
        }

        
        if (!$encontrado) {
            $_SESSION['error'] = "Usuario o contraseña incorrecta";
            header("Location: ./login.php");
            exit();
        }
    } 
} 

?>
