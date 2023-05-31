<?php
$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];

function suma($numero1, $numero2){
    $suma = $numero1 + $numero2;
    return $suma;
}
function resta($numero1, $numero2){
    $resta = $numero1 - $numero2;
    return $resta;
}
function multipli($numero1, $numero2){
    $multipli = $numero1 * $numero2;
    return $multipli;
}
function division($numero1, $numero2){
    $division = $numero1 / $numero2;
    return $division;
}

echo suma($numero1, $numero2)."<hr>";
echo resta($numero1, $numero2)."<hr>";
echo multipli($numero1, $numero2)."<hr>";
echo division($numero1, $numero2)
 



?>  