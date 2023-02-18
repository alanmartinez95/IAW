<!DOCTYPE html>
<html>
<head>
	<title>Formulario de Pedido</title>
</head>
<body>
	<!-- Idem que el anterior, sólo que ahora al enviar el pedido, devuelva una 
	web que resume los artículos que han sido pedidos a través del formulario web. -->
	
	<h1>Formulario de Pedido</h1>
	<form method="post" action="ejercicio10_pedido.php">
		<label for="barras_pan">Barras de Pan:</label>
		<input type="number" id="barras_pan" name="barras_pan" value="0"><br>

		<label for="bollos">Bollos:</label>
		<input type="number" id="bollos" name="bollos" value="0"><br>

		<label for="pan_bocatas">Pan de Bocatas:</label>
		<input type="number" id="pan_bocatas" name="pan_bocatas" value="0"><br>

		<label for="como_encontro">¿Cómo encontró nuestra página web?</label>
		<select id="como_encontro" name="como_encontro">
			<option value="buscador">A través de un buscador</option>
			<option value="redes_sociales">A través de redes sociales</option>
			<option value="recomendacion">Por recomendación de alguien</option>
			<option value="otro">Otro</option>
		</select><br>

		<input type="submit" value="Enviar Pedido">
	</form>
</body>
</html>
