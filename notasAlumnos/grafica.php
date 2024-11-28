<?php

$datos = [];

$fitxer = fopen("notasalumnos.csv", "r");

while(!feof($fitxer)){
    $line = fgets($fitxer);
    
    // Separamos la linea para las diferentes variables
    $cadena = explode(',', $line);

    if (count($cadena) == 3) {
        $dni = $cadena[0];
        $asig = $cadena[1];
        $nota = $cadena[2];

        if(!isset($datos[$asig])){

            $datos[$asig]['total_alumnos'] = 0;
            $datos[$asig]['suma_notas'] = 0;

        }
        
    

    $datos[$asig]['total_alumnos'] += 1;
    $datos[$asig]['suma_notas'] += $nota;

    }

}
fclose($fitxer);

$asignaturas = array_keys($datos);
$medias = [];

foreach ($datos as $asig => $info) {
    $media = $info['suma_notas'] / $info['total_alumnos'];
    $medias[] = $media;
}

?>

<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<body>


<div class="container d-flex flex-column justify-content-center align-items-center vh-100">

    <canvas id="myChart" style="width:100%;max-width:1000px"></canvas>
    
</div>

<script>
const xValues = <?php echo json_encode($asignaturas); ?>;
const yValues = <?php echo json_encode($medias); ?>;
const barColors = [
  "#FF5733", 
"#33FF57", 
"#3357FF", 
"#FF33A1", 
"#33FFA1", 
"#A133FF", 
"#FFC300", 
"#FF8333", 
"#3380FF", 
"#FF33B8", 
"#33FF85", 
"#C70039", 
"#900C3F", 
"#581845", 
"#FFC300", 
"#DAF7A6", 
"#FF5733", 
"#33B5E6", 
"#FF9A33", 
"#A1C6E7", 
"#FF33B8", 
"#FFDE33", 
"#A3FF33", 
"#33FFC2", 
"#FF6F33", 
"#7D33FF", 
"#FFC0CB", 
"#D3D3D3", 
"#ADD8E6", 
"#FFD700", 
"#32CD32", 
"#FF1493", 
"#CD5C5C", 
"#FF4500", 
"#6A5ACD", 
"#F0E68C", 
"#00FF7F", 
"#8A2BE2", 
"#FF6347", 
"#4682B4", 
"#B22222", 
"#DA70D6", 
"#D2691E", 
"#FF8C00", 
"#20B2AA", 
"#1E90FF", 
"#FFDAB9", 
"#ADFF2F", 
"#FFFACD", 
"#FFE4B5", 
"#B0E0E6", 
"#FFB6C1", 
"#B0C4DE", 
"#E6E6FA",
"#B0F0E6", 
"#F0E0E6", 
"#BGS0E6", 
"#H46FE6",
"#20B2AA", 
"#20B2AA"

];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "World Wide Wine Production 2018"
    }
  }
});
</script>

</body>
</html>
