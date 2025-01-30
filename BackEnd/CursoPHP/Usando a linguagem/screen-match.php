<?php

$filme = [
    "nome" => "Sonic",
    "ano" => 2025,
];

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme =  array_sum($notas) / $quantidadeDeNotas;



var_dump($notas);
sort($notas);
var_dump($notas);
$menorNota = min($notas);
echo $menorNota;


var_dump($filme['nome']);
var_dump(strpos($filme['nome'], "c"));