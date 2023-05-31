<?php

$textoParaComprobar = "aasdasdasdasd";

if(empty($textoParaComprobar)){
    $textoParaComprobar .= strtolower("tiKiTakKA");
    echo "La variable estaba vacía y el texto se añadió con exito"."<br>";
    echo "El texto añadido es: "."<b>".strtoupper($textoParaComprobar)."</b>";
}else{
    echo "La variable ya contiene texto, no se añadió nada"."<br>";
    echo "El texto que contiene la variable es: "."<b>".strtoupper($textoParaComprobar)."</b>";


}
















?>
