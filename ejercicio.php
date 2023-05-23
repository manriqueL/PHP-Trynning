<?php
/* Ejercicio 1
    Hacer un arreglo que contenga 8 numeros enteros y ahcer lo siguiente:
    -Recogerlo y mostrarlo
    -Ordenarlo y mostrarlo
    -Mostrar su longitud
    -Buscar elemento

*/
$arreglo = [7, 4, 8, 2, 5, 6, 1, 3];

//Recorre y muestra cada elemento del arreglo
var_dump($arreglo); 

//Ordena y muestra el arreglo de menor a maor
echo "<hr>";

asort($arreglo);
var_dump($arreglo);

?>