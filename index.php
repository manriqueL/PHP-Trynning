
<?php
$pais = "Argentina";
$continente = "America";

echo "<h1> $pais -  $continente</h1>";
$arreglo = [12, 22, 32, 42, 52, 63, 82, 43, 44, 66, 23, 22, 11, 10];
// var_dump($arreglo)
$pares = [];
$impares = [];
for ($i = 0; $i < sizeof($arreglo); $i++){
    if ($arreglo[$i] % 2 == 0){
        array_push($pares, $arreglo[$i]);

    }else{ 
        array_push($impares, $arreglo[$i]);

    };
}
var_dump($pares);
var_dump($impares);
echo "Pares: ".$pares;
echo "<br>";
echo "Impares: ".$impares;
?>