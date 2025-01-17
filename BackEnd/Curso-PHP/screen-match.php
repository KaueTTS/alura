<?php

echo "Bem vindo(as) ao screen match!\n\n";

$nomeFilme = "Sonic";
$anoLancamento = $argv[1] ?? 2022;

$somaDeNotas = (9 + 5 + 7);
$notaFilme =  $somaDeNotas / 3;

$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2021;

echo "-\t Filme: " . $nomeFilme . "\n";
echo "-\t Nota do filme: $notaFilme\n";
echo "-\t Ano de lançamento: $anoLancamento";