<?php
  $fp = fopen('datos.txt', 'w+');
    fwrite($fp, 'Julio');
    fwrite($fp, 'Noguera');
    fclose($fp);
?>

<?php
 $fitxer=fopen("datos.txt", "r");
    while(!feof($fitxer)){
       $line = fgets($fitxer);
       echo $line;
    }
    fclose($fitxer);
?>