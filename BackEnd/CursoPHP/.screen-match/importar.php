<?php

$caminhoArquivo = __DIR__ . "/filmes.json";

$conteudoArquivoFilme  = json_decode(file_get_contents($caminhoArquivo), true);

var_dump($conteudoArquivoFilme);