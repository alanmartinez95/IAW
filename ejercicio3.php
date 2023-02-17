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
    // Inicializamos la variable $num con el primer número del rango
    $num = 1; 
    // Inicializamos la variable $sum en 0 para acumular la suma de los cuadrados
    $sum = 0; 
    // mientras quwe $num sea menor o igual que 50
    while ($num <= 50) { 
        $square = $num * $num; 
    // obtenemos el cuadrado 
        echo "el cuadrado de  ". $num . "  es " . $square . "<br>"; 
        // acumulamos la suma en $sum
        $sum += $square; 
        // incrementamos en 1 el contador
        $num++; 
    }
     // mostramos la suma
    echo "La suma de los cuadrados es de   " . $sum;
    ?>

</body>
</html>