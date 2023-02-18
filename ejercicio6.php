<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Crea un array con los meses del año.
    Imprímelos en pantalla ordenados de alfabéticamente.*/
     
    //definimos la variable donde se guardaran los meses
     $meses = array("enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre");
     // utilizamos sort para ordenar los meses
     sort($meses);
     //establecemos  para cada valor del array
     foreach ($meses as $mes) {
    //imprimimos por pantalla
         echo $mes . "<br>";
     }

    ?>
</body>
</html>