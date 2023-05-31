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
    //Agregar ruta de una imagen en html con php 
    //y mostrar la imagen en el navegador
        $rutaDeImagen = "./img/Captura de pantalla (1).png"
    ?>
    <img src="<?php echo $rutaDeImagen ?>">
</body>
</html>