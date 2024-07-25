<?php
function esPalindromo($cadena){
    $cadenaSinEspacios = strtolower (str_replace([' ', '.', ',', '!', '¿', '¡'], '', $cadena));
    $cadenaInvertida = strrev($cadenaSinEspacios);
    return $cadenaSinEspacios === $cadenaInvertida;
}    
$cadena = "Ana";

if (esPalindromo($cadena)) {
    echo "'$cadena' es un palindromo\n";
} else {
    echo "'$cadena' no es un palindromo\n";
}     