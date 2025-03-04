<?php

use GuzzleHttp\Client;

$client = new Client();
$resposta = $client->request('GET', 'https://www.alura.com.br/cursos-online-programacao/php'); // https://www.alura.com.br/api/cursos

$html = $resposta->getBody();