<?php

echo "Bem vindo(as) ao screen match!\n\n"; // Mostrando a primeira mensagem no terminal


$nomeFilme = "Sonic";


$anoLancamento = $argv[1] ?? 2023; // Estamos acessando o primeiro argumento passado no terminal (excluindo o nome do script). Se o usuário não passar nenhum argumento, $argv[1] será 2022 (valor passado como padrão).


$somaDeNotas = (9 + 5 + 7);
$notaFilme =  $somaDeNotas / 3;
$planoPrime = false;
$primeStatus = $planoPrime ? "{ Plano ativado }" : "{ Plano desativado }"; // operador ternário (se $planoPrime for true retorna ativo)


// resultado no terminal
echo "$primeStatus\n\n";
echo "-\t Filme: " . $nomeFilme . "\n";
echo "-\t Nota do filme: $notaFilme\n";
echo "-\t Ano de lançamento: $anoLancamento\n";


if ($anoLancamento > 1920 && $anoLancamento <= 2022 || $planoPrime) {
    echo "-\t Incluído no plano: Sim\n";
} elseif ($anoLancamento <= 1920 ) {
    echo "-\t Erro de busca\n"; 
} else {
    echo "-\t Incluído no plano: Não\n";
}


$genero = match ($nomeFilme) {
    "Sonic 3" => "Ação/Aventura",
    "Harry Potter" => "Fantasia",
    "Velozes e Furiosos" => "Ação",
    default => "Gênero desconhecido"
}; // A expressão match é utilizada para comparar o valor de uma variável (neste caso, $nomeFilme) com uma série de valores possíveis. Se houver uma correspondência, o valor associado a essa correspondência será atribuído à variável $genero


echo "-\t O gênero do filme é: $genero";