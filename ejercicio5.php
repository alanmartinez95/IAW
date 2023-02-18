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
    /* Desarrolla el código necesario para redondear un número cualquiera 
      con hasta tres cifras decimales, sin usar la función round */

      // Número a redondear
    $num = 1.5960384; 

    // Redondea el número a tres cifras decimales
    $num_redondeado = floor($num * 1000) / 1000; 

    // Imprime el número redondeado
    echo $num_redondeado; 
?>
 
</body>
</html>