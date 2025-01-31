<?php
$nomeArquivo = "teste.txt";
$novaFrase = "\nPHP é incrível!";

 // Abre o arquivo para escrita no final
 // (a) significa que o arquivo será aberto para escrita
$arquivo = fopen($nomeArquivo, 'a');
 // Escreve no arquivo
fwrite($arquivo, $novaFrase);
 // Fecha o arquivo
fclose($arquivo);