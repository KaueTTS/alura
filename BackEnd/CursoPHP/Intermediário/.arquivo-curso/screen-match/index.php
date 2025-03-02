<?php

require 'autoload.php';

use ScreenMatch\Modelo\{
    Filme, Episodio, Serie, Genero
};
use ScreenMatch\Calculos\{
    CalculadoraDeMaratona, ConversorNotaEstrela
};

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    'Thor - Ragnarok',
    2021,
    Genero::SuperHeroi,
    180,
);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento . "\n";

$serie = new Serie('Lost', 2007, Genero::Drama, 10, 20, 30);
$episodio = new Episodio($serie, 'Episódio piloto', 1);

echo $serie->anoLancamento . "\n";

$serie->avalia(8);

echo $serie->media() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Para essa maratona, você precisa de $duracao minutos\n";

$conversor = new ConversorNotaEstrela();
echo $conversor->converte($serie) . "\n";
echo $conversor->converte($filme) . "\n";
