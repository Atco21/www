<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php
$continentes = array(
    array("continente"=>"Europa", "paises"=>array(array("pais"=>"España", "capital"=>"Madrid", "bandera"=>"img/espana.png"), array("pais"=>"Reino Unido", "capital"=>"Londres", "bandera"=>"img/reinounido.png"), array("pais"=>"Suecia", "capital"=>"Estocolmo", "bandera"=>"img/suecia.png"))),
    array("continente"=>"América", "paises"=>array(array("pais"=>"Perú", "capital"=>"Lima", "bandera"=>"img/peru.png"), array("pais"=>"Canadá", "capital"=>"Ottawa", "bandera"=>"img/canada.png"))),
    array("continente"=>"África", "paises"=>array(array("pais"=>"Chad", "capital"=>"Yamena", "bandera"=>"img/chad.png"), array("pais"=>"Uganda", "capital"=>"Kampala", "bandera"=>"img/uganda.png"))),
    array("continente"=>"Asia", "paises"=>array(array("pais"=>"China", "capital"=>"Pekín", "bandera"=>"img/china.png"), array("pais"=>"Japón", "capital"=>"Tokio", "bandera"=>"img/japon.png"))),
    array("continente"=>"Oceanía", "paises"=>array(array("pais"=>"Australia", "capital"=>"Canberra", "bandera"=>"img/australia.png")))
);


foreach ($continentes as $continente) {
    echo "<table border='1'>";
    echo "<tr> <td style='padding:0.5em'><b>Pais</b></td> <td style='padding:0.5em'><b>Capital</b></td> <td style='padding:0.5em'><b>Bandera</b></td> </tr>";

    echo "<h1>". $continente["continente"] ."</h1>";

    foreach ($continente["paises"] as $paises) {
        
        echo "<tr>";
        echo "<td style='padding:1em'>". $paises["pais"]. "</td>";

        echo "<td style='padding:1em'>". $paises["capital"]. "</td>";

        echo "<td> <img src= ". $paises["bandera"]." style='padding:0.5em'></td>";
        echo "</tr>";

    }
    echo "</table>";

   
}

?>



    
</body>
</html>