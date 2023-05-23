<?php
/* Ejercicio 1
    Hacer un arreglo que contenga 8 numeros enteros y ahcer lo siguiente:
    -Recogerlo y mostrarlo
    -Ordenarlo y mostrarlo
    -Mostrar su longitud
    -Buscar elemento

*/
$arreglo = [7, 4, 8, 2, 5, 6, 1, 3];

//Funcion para mostrar el arreglo
function mostrarArreglo($arreglo){
    $resultado = "";
    foreach ($arreglo as $numero){
            $resultado .= $numero."  ";
        }
    return $resultado;
}
    
//Recorre y muestra cada elemento del arreglo
echo "Lista Original: ".mostrarArreglo($arreglo);


//Ordena y muestra el arreglo de menor a maor
echo "<hr>";

asort($arreglo);
echo "Lista Ordenada de Menor a Mayor: ".mostrarArreglo($arreglo);

echo "<hr>";

//Muestra la longitud del arreglo
echo "Longitud de la lista: " .count($arreglo);

echo "<hr>";

//Busca un elemento dentro del arreglo y devuelve el indice donde se encuentra
$elemento = array_search( 4, $arreglo);
echo "Elemento buscado: $elemento";

?>