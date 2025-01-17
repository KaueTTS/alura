<?php

echo "Bem vindo(as) ao screen match!\n\n";

$nomeFilme = "Sonic"; // Atribuindo o nome do filme
$anoLancamento = $argv[1] ?? 2022; // Estamos acessando o primeiro argumento passado para o script (excluindo o nome do script). Se o usuário não passar nenhum argumento, $argv[1] será null.

$somaDeNotas = (9 + 5 + 7);
$notaFilme =  $somaDeNotas / 3;

$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2021;

echo "-\t Filme: " . $nomeFilme . "\n";
echo "-\t Nota do filme: $notaFilme\n";
echo "-\t Ano de lançamento: $anoLancamento";