<?php
// Recogemos los datos del formulario
$barras_pan = $_POST['barras_pan'];
$bollos = $_POST['bollos'];
$pan_bocatas = $_POST['pan_bocatas'];
$como_encontro = $_POST['como_encontro'];

// Calculamos el total del pedido
$total_pedido = $barras_pan * 0.5 + $bollos * 0.2 + $pan_bocatas * 0.7;

// Creamos la página con el resumen del pedido
echo "<!DOCTYPE html>
<html>
<head>
	<title>Resumen de Pedido</title>
</head>
<body>
	<h1>Resumen de Pedido</h1>
	<p>Barras de Pan: $barras_pan</p>
	<p>Bollos: $bollos</p>
	<p>Pan de Bocatas: $pan_bocatas</p>
	<p>Total del Pedido: $total_pedido €</p>
	<p>¿Cómo encontró nuestra página web?: $como_encontro</p>
</body>
</html>";
?>
