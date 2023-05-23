<?php

$arreglo = [];

while (sizeof($arreglo) < 120) {
    array_push($arreglo, random_int(0,1));
};

//Funcion para mostrar el arreglo
function mostrarArreglo($arreglo){
    $resultado = "";
    foreach ($arreglo as $numero){
            $resultado .= $numero."  ";
        }
    return $resultado;
}
    
//Recorre y muestra cada elemento del arreglo
echo "Lista Original: ".mostrarArreglo(print_r($arreglo));



















?>