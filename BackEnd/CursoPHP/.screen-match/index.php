<?php

//include __DIR__ . "/src/funcoes.php";
require __DIR__ . "/src/Model/Filme.php";
require __DIR__ . "/src/funcoes.php";

echo "\nWelcome to Screen Match!\n";

$nomeFilme = "Sonic";
$anoLancamento = 2025;
$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($i = 1; $i < $argc; $i++) {
    $notas[] = (float) $argv[$i];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;
$primeStatus = incluidoNoPlano($planoPrime, $anoLancamento);

exibeMensagemLancamento($anoLancamento, $planoPrime);

$genero = match ($nomeFilme) {
    "Sonic" => "Ação/Aventura",
    "Harry Potter" => "Fantasia",
    "Velozes e Furiosos" => "Ação",
    default => "Gênero desconhecido"
};

$filme = criaFilme(
    nome: "Sonic", 
    anoLancamento: 2025, 
    nota: 10, 
    genero: "Ação/Aventura"
);

echo "-\t Filme: $filme->nome\n";
echo "-\t Nota: $notaFilme\n";
echo "-\t Ano de lançamento: $anoLancamento\n";
echo "-\t Gênero: $genero\n\n";

$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__ . "/filmes.json", $filmeComoStringJson);