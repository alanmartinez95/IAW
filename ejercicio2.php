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
    /*Imprime en pantalla  los números impares 
      del 1 al 100 y su suma acumulada, usando 
      la estructura if.*/
    
      // deifinimos una varieblaa para la suma 
    $suma = 0;
    //establecemos las condiciones de los pares
    for ($i = 1; $i <= 100; $i++) {
        //c0ndicionamos los parametros impares 
        if ($i % 2 != 0) {
            echo 'impar'. $i .'<br>';
        //empezamo a sumar los resultados
            $suma += $i;
        //tambien se puede escribir $suma += $i 
        }   
    }
        //sacamos por pantalla la suma total
        echo "la suma es $suma";
    ?>
</body>
</html>