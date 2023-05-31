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
    echo "<table border='1'>";
        echo "<tr>";
        for ($numero=1; $numero<=10 ; $numero++) { 
            echo "<td>Tabla $numero</td>";
        }
        echo "</tr>";
        echo "<tr>";
        for ($i=1; $i<=10 ; $i++) { 
            echo"<td>";
            $count = 1;
            while ($count <= 10) {
                echo $count.' x '. $i ." = ". $i * $count. "<br>";
                $count ++;
            }echo "</td>";
            }
        echo "</tr>";
    echo "</table>";
    ?>
</body>
</html>