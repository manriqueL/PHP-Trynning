<?php
//Cargar array con numeros desde 0 al 100, hasta que llegue a un maximo de 120 elementos.
$arreglo = [];

while (sizeof($arreglo) < 120) {
    array_push($arreglo, random_int(0,100));
    
};

print_r($arreglo);
    



















?>