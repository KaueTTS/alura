<?php

use ScreenMatch\Calc\ConversorNotaEstrela;
use ScreenMatch\Exception\NotaInvalidaException;
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

try {
    $episodio->avalia(82);

    $conversor = new ConversorNotaEstrela();
    echo $conversor->converte($episodio);
} catch(NotaInvalidaException $e) {
    echo "Houve um problema: " . $e->getMessage();
}
