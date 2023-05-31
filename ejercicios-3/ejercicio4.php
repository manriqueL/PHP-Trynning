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
    //Tabla de multiplicar 
    $count = 0;
    $numero= $_GET["numero"];
    while ($count <= 10) {
        echo $numero.' x '. $count ." = ". $numero * $count. "<br>";
        $count ++;
    }
    ?>
</body>
</html>