<?php

// Abre o arquivo para leitura 
// (r) significa que o arquivo será aberto para leitura
// SE o arquivo não existir, fopen() retorna FALSE
$arquivo = fopen('teste.txt', 'r');
// Lê a primeira linha do arquivo e armazena em $primeiraLinha
$primeiraLinha = fgets($arquivo);
// Fecha o arquivo
fclose($arquivo);

echo $primeiraLinha;