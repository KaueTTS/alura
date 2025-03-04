<?php

require 'vendor/autoload.php';

use \GuzzleHttp\Client;
use \Symfony\Component\DomCrawler\Crawler;

$client = new Client();

try {
    $resposta = $client->request('GET', 'https://www.alura.com.br/cursos-online-programacao/php', [
        'verify' => false
    ]); // https://www.alura.com.br/api/cursos
} catch (\GuzzleHttp\Exception\RequestException $e) {
    echo "Erro ao fazer requisição (URL não encontrada): " . $e->getMessage();
    exit;
}

$html = $resposta->getBody();

$crawler = new Crawler();
$crawler->addHtmlContent($html);

$cursos = $crawler->filter('span.card-curso__nome');

foreach ($cursos as $curso) {
    echo $curso->textContent . PHP_EOL;
}