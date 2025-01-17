<?php

echo "Bem vindo(as) ao screen match!\n\n"; // Mostrando a primeira mensagem no terminal

$nomeFilme = "Sonic"; // Atribuindo o nome do filme
$anoLancamento = $argv[1] ?? 2023; // Estamos acessando o primeiro argumento passado no terminal (excluindo o nome do script). Se o usuário não passar nenhum argumento, $argv[1] será 2022 (valor passado como padrão).
$somaDeNotas = (9 + 5 + 7);
$notaFilme =  $somaDeNotas / 3;
$planoPrime = false;

// resultado no terminal
echo "-\t Filme: " . $nomeFilme . "\n";
echo "-\t Nota do filme: $notaFilme\n";
echo "-\t Ano de lançamento: $anoLancamento\n";

if ($anoLancamento > 1920 && $anoLancamento <= 2022) {
    echo "-\t Incluído no plano: Sim";
} elseif ($anoLancamento <= 1920 ) {
    echo "-\t Erro de busca"; 
} else {
    echo "-\t Incluído no plano: Não";
}