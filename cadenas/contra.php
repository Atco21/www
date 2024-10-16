<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$password = "23asda";
$numVocal = true;       
$numConsonante = true; 
$ocurrenciaValida = true;   
$longCarac = false;
$espacios = false;

//la longitud de la contraseña
if (strlen($password) >= 6 && strlen($password) <= 10) {
    $longCarac = true;
}

for ($i = 0; $i < strlen($password); $i++) {

    // Verificamos si hay espacios en la contraseña
    if ($password[$i] == ' ') {
        $espacios = true;
    }

    // Verificamos si hay caracteres repetidos
    if ($i + 1 < strlen($password) && $password[$i] === $password[$i + 1]) {
        if (!(($password[$i] == "e" && $password[$i + 1] == "e") || ($password[$i] == "o" && $password[$i + 1] == "o"))) {
            $ocurrenciaValida = false;
        }
    }
    //
    if ($i + 2 < strlen($password)) {
        if (
            in_array($password[$i], ['a', 'e', 'i', 'o', 'u']) &&
            in_array($password[$i + 1], ['a', 'e', 'i', 'o', 'u']) &&
            in_array($password[$i + 2], ['a', 'e', 'i', 'o', 'u'])
        ) {
            $numVocal = false;  
        }
    }

    if ($i + 2 < strlen($password)) {
        if (
            !in_array($password[$i], ['a', 'e', 'i', 'o', 'u']) && ctype_alpha($password[$i]) &&
            !in_array($password[$i + 1], ['a', 'e', 'i', 'o', 'u']) && ctype_alpha($password[$i + 1]) &&
            !in_array($password[$i + 2], ['a', 'e', 'i', 'o', 'u']) && ctype_alpha($password[$i + 2])
        ) {
            $numConsonante = false;  // Hay 3 consonantes consecutivas, lo marcamos como falso
        }
    }
}

// Validamos si la contraseña
if ($numVocal == true && $numConsonante == true && $ocurrenciaValida == true && $longCarac == true && $espacios == false) {
    echo "Contraseña válida";
} else {
    echo "Contraseña inválida";
}

?>

</body>
</html>
