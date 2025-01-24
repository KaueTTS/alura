<?php

$notas = [
    9,
    3,
    10,
    5,
    6
];

foreach ($notas as $nota) {
    $resultado = $nota >= 6 ? 'Aprovado' : 'Reprovado';

    echo "Nota: $nota - Resultado: $resultado\n";
}