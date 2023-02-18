<!DOCTYPE html>
<html>
<head>
    <title>Pedido de panadería</title>
</head>
<body>
    <h1>Pedido de panadería</h1>
    <!-- Formulario que procese el pedido de una pandería (barras de pan, 
       bollos, pan de bocatas), y pregunte al cliente cómo encontró la página web.
       Al enviar el formulario debe devolver un mensaje de
       “Pedido enviado correctamente. Gracias!”. -->

       <!-- // Formulario de pedido de panadería, ejercicio9 pedido es a donde 
         se enviara el contenido del formulario -->
       <form action="ejercicio9_pedido.php" method="post">      
       <label for="barras_pan">Barras de pan:</label> 
        <input type="number" name="barras_pan" id="barras_pan" min="0"><br><br> 
        <label for="bollos">Bollos:</label>
        <input type="number" name="bollos" id="bollos" min="0"><br><br>
        <label for="pan_bocatas">Pan de bocatas:</label> 
        <input type="number" name="pan_bocatas" id="pan_bocatas" min="0"><br><br> 
        <label for="como_encontro">¿Cómo encontró nuestra página web?</label> 
    <!-- Menú desplegable para que el cliente seleccione cómo encontró la página web -->    
        <select name="como_encontro" id="como_encontro"> 
            <option value="buscador">Buscador</option> 
            <option value="redes_sociales">Redes sociales</option> 
            <option value="recomendacion">Recomendación de un amigo o familiar</option> 
            <option value="otro">Otro</option>    
        </select><br><br>                       
    <!-- Boton envio de formulario -->
        <input type="submit" value="Enviar pedido"> 
    </form>                                   
</body>                                     
</html>         