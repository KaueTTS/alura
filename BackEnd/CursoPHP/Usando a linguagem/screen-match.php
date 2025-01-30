<?php

$nomeFilme = "Sonic";
$anoLancamento = 2025;
$quantidadeDeNotas = $argc - 1;
$notas = [];

function exibeMensagemLancamento(int $ano, bool $plano): void {
    if ($ano > 1920 && $ano <= 2022 || $plano) {
        echo "-\t Incluído no plano: Sim\n";
    } elseif ($ano <= 1920 ) {
        echo "-\t Erro de busca\n"; 
    } else {
        echo "-\t Incluído no plano: Não\n";
    }
}

function incluidoNoPlano($ano, $plano): bool {
    return $plano ? "{ Plano ativado }" : "{ Plano desativado }";
}

echo "Bem vindo(as) ao screen match!\n\n";

$contador = 1;
for ($contador; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme =  array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;
$primeStatus = incluidoNoPlano($anoLancamento, $planoPrime);

echo "$primeStatus\n\n";
echo "-\t Filme: " . $nomeFilme . "\n";
echo "-\t Nota do filme: $notaFilme\n";
echo "-\t Ano de lançamento: $anoLancamento\n";

exibeMensagemLancamento($anoLancamento, $planoPrime);

$genero = match ($nomeFilme) {
    "Sonic" => "Ação/Aventura",
    "Harry Potter" => "Fantasia",
    "Velozes e Furiosos" => "Ação",
    default => "Gênero desconhecido"
};

echo "-\t O gênero do filme é: $genero";

var_dump($notas);
sort($notas);
var_dump($notas);