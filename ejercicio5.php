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
    /* el numero que queremos redondear sera $num, alamacenarmeos la parte entera con $ent 
    floor (redonde los decimales hacia abajo),almacenamos los decimales en $dec */
    $num = 12.3456789; 
    $ent = floor($num);
    $dec = $num - $ent;

    /* multiplicamos * 1000 para convertir las cifras decimales en enteros y creamos otra variable 
    donde almacenaremos la parte entera del resultado de * 1000 */
    $dec *= 1000;
    $dec_red = floor($dec);

    // condicionamos si la cuarta cifra decimal >= 5, sumamos 1 a $dec_red
    if ($dec - $dec_red >= 0.5) {
        $dec_red++;
        
    } 
        
    // Si $dec_red es igual a 1000, lo redondeamos a 0 y sumamos 1 a $integer
    if ($dec_red == 1000) {
        $dec_red = 0;
        $ent++;
    }

    /* Concatenamos la parte entera con el resultado del redondeo de las
    tres primeras cifras decimales y lo imprimimos en pantalla*/
    echo $ent . "." . str_pad($dec_red, 3, "0", STR_PAD_LEFT);
?>
 
</body>
</html>