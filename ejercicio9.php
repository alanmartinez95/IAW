<!DOCTYPE html>
<html>
<head>
    <title>Pedido de panadería</title>
</head>
<body>
    <h1>Pedido de panadería</h1>
    <form action="ejercicio9_pedido.php" method="post">
        <label for="barras_pan">Barras de pan:</label>
        <input type="number" name="barras_pan" id="barras_pan" min="0"><br><br>
        <label for="bollos">Bollos:</label>
        <input type="number" name="bollos" id="bollos" min="0"><br><br>
        <label for="pan_bocatas">Pan de bocatas:</label>
        <input type="number" name="pan_bocatas" id="pan_bocatas" min="0"><br><br>
        <label for="como_encontro">¿Cómo encontró nuestra página web?</label>
        <select name="como_encontro" id="como_encontro">
            <option value="buscador">Buscador</option>
            <option value="redes_sociales">Redes sociales</option>
            <option value="recomendacion">Recomendación de un amigo o familiar</option>
            <option value="otro">Otro</option>
        </select><br><br>
        <input type="submit" value="Enviar pedido">
        
    </form>
   
</body>
</html>
