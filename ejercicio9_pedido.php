<?php
    //devulve un mensaje de “Pedido enviado correctamente. Gracias!”.

    // Recogemos los datos del formulario
        $barras_pan = $_POST['barras_pan'];
        $bollos = $_POST['bollos'];
        $pan_bocatas = $_POST['pan_bocatas'];
        $como_encontro = $_POST['como_encontro'];
                   
    // Devolvemos un mensaje de confirmación
        echo "Pedido enviado correctamente. Gracias!";
        
?>