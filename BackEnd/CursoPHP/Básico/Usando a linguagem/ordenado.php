<?php

function ordenarStrings(array $array): array
{
    sort($array);
    return $array;
}

// Ordena o array em ordem alfabética
$array = ["banana", "abacaxi", "laranja", "uva"];
$arrayOrdenado = ordenarStrings($array);
echo "Array ordenado: ";
print_r($arrayOrdenado);