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
      
    // Directorio donde se subirán las imágenes
      $dir_subida = 'imagenes/';
      
    // Comprobamos si se ha enviado una imagen
      if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == UPLOAD_ERR_OK) {
      
    // Comprobamos que el archivo sea una imagen GIF o JPG
          $tipo = exif_imagetype($_FILES['imagen']['tmp_name']);
          if ($tipo == IMAGETYPE_GIF || $tipo == IMAGETYPE_JPEG) {
      
    // Comprobamos que el archivo no supere los 200kb
              if ($_FILES['imagen']['size'] <= 200000) {
      
    // Subimos la imagen al directorio especificado
                  $fichero_subido = $dir_subida . basename($_FILES['imagen']['name']);
                  if (move_uploaded_file($_FILES['imagen']['tmp_name'], $fichero_subido)) {
                      echo "El archivo se ha subido correctamente.";
                  } else {
                      echo "Ha ocurrido un error al subir el archivo.";
                  }
      
              } else {
                  echo "El archivo es demasiado grande. El tamaño máximo permitido es 200kb.";
              }
      
          } else {
              echo "El archivo no es una imagen GIF o JPG.";
          }
      
      }
      
      // Mostramos todas las imágenes que se hayan subido
      $imagenes = glob($dir_subida . "*.{jpg,gif}", GLOB_BRACE);
      foreach ($imagenes as $imagen) {
          echo "<img src='$imagen' alt='imagen'>";
      }
      
      
    ?>
</body>
</html>