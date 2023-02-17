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
        // iniicamos la variable $sum en 0 
        $sum = 0;
        // iteramos del 1-100 y encontramos los multiplos de 5
        for ($i = 1; $i <= 100; $i++) {
        // condicionamos los múltiplo de 5
            if ($i % 5 == 0) { 
                echo $i . "<br>"; 
        // vamos acumulando la variable $sum
                $sum += $i; 
                echo "esta es la suma de los numeros multiplos de 5 hasta el ". $i . "  =  "  . $sum . "<br>";
        }
        }
        // Calculamos el cuadrado de la suma de los múltiplos de 5 y lo almacenamos en la variable $squared_sum
        $sumxsum = $sum * $sum;

        // Imprimimos en pantalla el cuadrado de la suma de los múltiplos de 5
        echo "esta es la suma del cuadrado del nmero de arriba   " . $sumxsum;
    ?>

</body>
</html>