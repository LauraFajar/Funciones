<?php
function generarFibonacci($limite) {

if (!is_int($limite) || $limite < 1) {
  throw new Exception("El límite debe ser un número entero positivo");
}

$secuencia = [0, 1];

for ($i = 2; $i < $limite; $i++) {
  $secuencia[$i] = $secuencia[$i - 1] + $secuencia[$i - 2];
}
return $secuencia;
}
$secuenciaFibonacci = generarFibonacci(10);
print_r($secuenciaFibonacci);