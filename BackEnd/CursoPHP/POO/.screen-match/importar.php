<?php

// Esse código é responsável por importar o conteúdo do arquivo filmes.json e exibir o seu conteúdo
$caminhoArquivo = __DIR__ . "/filmes.json";

// Importa o conteúdo do arquivo filmes.json
$conteudoArquivoFilme  = json_decode(file_get_contents($caminhoArquivo), true);

// Exibe o conteúdo do arquivo filmes.json
var_dump($conteudoArquivoFilme);