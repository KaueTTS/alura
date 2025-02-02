<?php

require __DIR__ . "/src/Model/Filme.php";
require __DIR__ . "/src/funcoes.php";

echo "\nBem vindo ao Screen Match!\n";

$filme = new Filme();
$filme->nome = "Sonic";
$filme->anoLancamento = 2025;
$filme->genero = "Ação/Aventura";

$filme->avalia(10);
$filme->avalia(9);

var_dump($filme);

echo $filme->media();