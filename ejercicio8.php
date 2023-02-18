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
    /* Subir al directorio imagenes una imagen seleccionada por el usuario siempre que sea GIF o JPG y no pase de 200kb,
      a este directorio y luego mostrará todas las imágenes que se hayan subido.*/
     
    // Directorio donde se encuentran las imágenes y los tipos de archivo permitidos.  
        $directorio = "imagenes/"; 
        $tipos_permitidos = array("image/gif", "image/jpeg"); 

    // Obtiene todos los archivos del directorio y los filtra por tipo de archivo.
        $archivos = array_filter(scandir($directorio), function ($archivo) use ($directorio, $tipos_permitidos) {
        $ruta = $directorio . $archivo;
            return is_file($ruta) && in_array(mime_content_type($ruta), $tipos_permitidos);
        });

    // Recorre los archivos y muestra cada imagen en una etiqueta HTML <img>.
        foreach ($archivos as $archivo) {
            echo "<img src='imagenes/$archivo' alt='$archivo'>";
        }
       
    ?>

</body>
</html>