<?php

require __DIR__ . "/src/Model/Genero.php";
require __DIR__ . "/src/Model/Filme.php";
require __DIR__ . "/src/funcoes.php";

echo "\nBem vindo ao Screen Match!\n";

$filme = new Filme(
    nome: 'Vingadores',
    anoLancamento: 2019,
    genero: Genero::Acao
);
// $filme->defineNome("Vingadores");
// $filme->defineAnoLancamento(2019);
// $filme->defineGenero("Ação");

$filme->avalia(10);
$filme->avalia(9);

var_dump($filme);

echo "\n -\t Filme: " . $filme->nome;
echo "\n -\t Lançamento: " . $filme->anoLancamento;
echo "\n -\t Nota: " . $filme->media();
echo "\n -\t Gênero: " . $filme->genero->name;
