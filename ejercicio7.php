<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=chat, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*Código PHP que dibuja 100 cuadrados en la pantalla 
      usando colores aleatorios.*/

      //definimos los lados del cuadrado 
    $base = 50;
    $altura = 50;

    // deifinimos función para generar colores RGB
    function colores() {
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b = rand(0, 255);
        return "rgb($r, $g, $b)";
    }

    // definimos el bucle para hacer los 100 cuados
    for ($i = 0; $i < 100; $i++) {

    // Generamos un color aleatorio para cada cuadrado
        $color_cuadro = colores();

    // Calculamos las coordenadas (x, y) del cuadrado actual
        $x = ($i % 10) * $base;
        $y = floor($i / 10) * $altura;

    // Dibujamos el cuadrado con el color generado
        echo "<div style='position: absolute; left: {$x}px; top: {$y}px; width: {$base}px; height: {$altura}px; background-color: {$color_cuadro};'></div>";

    }
    
    ?>
</body>
</html>