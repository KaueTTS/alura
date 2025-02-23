<?php

use ScreenMatch\Calc\ConversorNotaEstrela;
use ScreenMatch\Model\Episodio;
use ScreenMatch\Model\Genero;
use ScreenMatch\Model\Serie;

require 'autoload.php';

$serie = new Serie(
    'Nome da Série',
    2024,
    Genero::Acao,
    5,
    10,
    40
);

$episodio = new Episodio(
    $serie,
    'Piloto',
    1
);

$conversor = new ConversorNotaEstrela(5);
echo $conversor->converte($episodio);