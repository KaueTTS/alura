<?php

//include __DIR__ . "/src/funcoes.php";
require __DIR__ . "/src/funcoes.php";

echo "Welcome to Screen Match!\n";

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

echo "-\t Filme: " . $nomeFilme . "\n";
echo "-\t Nota do filme: $notaFilme\n";
echo "-\t Ano de lançamento: $anoLancamento\n";
echo "-\t O gênero do filme é: $genero";

$filme = criaFilme(
    nome: "Sonic", 
    anoLancamento: 2025, 
    nota: 10, 
    genero: "Ação/Aventura"
);

echo $filme["genero"];

$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__ . "/filmes.json", $filmeComoStringJson);
