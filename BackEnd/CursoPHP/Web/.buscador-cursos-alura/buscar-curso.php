<?php

require 'vendor/autoload.php';
require 'src/Buscador.php';

use \GuzzleHttp\Client;
use \Symfony\Component\DomCrawler\Crawler;
use \Alura\BuscadorDeCursos\Buscador;

// try {
//     $resposta = $client->request('GET', 'https://www.alura.com.br/cursos-online-programacao/php', [
//         'verify' => false
//     ]); // https://www.alura.com.br/api/cursos
// } catch (\GuzzleHttp\Exception\RequestException $e) {
//     echo "Erro ao fazer requisição (URL não encontrada): " . $e->getMessage();
//     exit;
// }

// $html = $resposta->getBody();

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
}