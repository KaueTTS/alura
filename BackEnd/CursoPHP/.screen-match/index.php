<?php

require __DIR__ . "/src/Model/Avaliavel.php";
require __DIR__ . "/src/Model/Genero.php";
require __DIR__ . "/src/Model/Titulo.php";
require __DIR__ . "/src/Model/Episodio.php";
require __DIR__ . "/src/Model/Filme.php";
require __DIR__ . "/src/Model/Serie.php";
require __DIR__ . "/src/Calc/CalculadoraDeMaratona.php";
require __DIR__ . "/src/Calc/ConversorNotaEstrela.php";
require __DIR__ . "/src/funcoes.php";

// Criando um filme
$filme = new Filme(
    nome: 'Vingadores',
    anoLancamento: 2019,
    genero: Genero::Acao,
    duracao: 180
);
$filme->avalia(10);
$filme->avalia(9);

// Criando uma Série
$serie = new Serie(
    nome: 'Breaking Bad',
    anoLancamento: 2008,
    genero: Genero::Drama,
    temporadas: 5,
    episodiosPorTemporada: 10,
    minutosPorEpisodio: 45
);

$serie->avalia(10);

/* Episodios */
$episodio = new Episodio(
    serie: $serie,
    nome: 'Episódio piloto',
    numero: 1
);


// var_dump($filme);
// var_dump($serie);

// ***************
// *** FILMES
echo "\nBem vindo ao Screen Match!\n";

echo "\n ==================\n";
echo   "====== FILMES ======";
echo "\n ==================\n";

echo "\n -\t Filme: {$filme->nome}";
echo "\n -\t Lançamento: {$filme->anoLancamento}";
echo "\n -\t Nota: {$filme->media()}";
echo "\n -\t Gênero: {$filme->genero->name}\n";


// ***************
// *** SÉRIES
echo "\n ==================\n";
echo   "====== SÉRIES ======";
echo "\n ==================\n";

echo "\n -\t Filme: {$serie->nome}";
echo "\n -\t Lançamento: {$serie->anoLancamento}";
echo "\n -\t Nota: {$serie->media()}";
echo "\n -\t Gênero: {$serie->genero->name}";
echo "\n -\t Temporadas: {$serie->temporadas}";


$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "\n\nPara maratonar o filme e a série você precisará de {$duracao} minutos\n";

$conversor = new ConversorNotaEstrela();
echo $conversor->converte($serie);