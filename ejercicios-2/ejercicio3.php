<?php

$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];

if (isset($numero1) && isset($numero2)) {
    if($numero1<$numero2){
        for($i=$numero1; $i <= $numero2 ; $i++) { 
            echo "<h1>$i</h1>";
        }
    }else{
        for($i=$numero1; $i >= $numero2 ; $i--){ 
            echo "<h1>$i</h1>";
        }
    }    
}else{
    echo "<h1>Ingrese los datos por URL</h1>";
}

?>