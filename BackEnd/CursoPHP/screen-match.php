<?php

function exibeMensagemLancamento($ano, $plano) {
    if ($ano > 1920 && $ano <= 2022 || $plano) {
        echo "-\t Incluído no plano: Sim\n";
    } elseif ($ano <= 1920 ) {
        echo "-\t Erro de busca\n"; 
    } else {
        echo "-\t Incluído no plano: Não\n";
    }
}


echo "Bem vindo(as) ao screen match!\n\n"; // Mostrando a primeira mensagem no terminal


$nomeFilme = "Sonic";


// $anoLancamento = $argv[1] ?? 2025; // Estamos acessando o primeiro argumento passado no terminal (excluindo o nome do script). Se o usuário não passar nenhum argumento, $argv[1] será 2022 (valor passado como padrão).
$anoLancamento = 2025;


$quantidadeDeNotas = $argc - 1; // Puxa os dois valores passado no terminal - 1 (subtrai 1 pq é o nome do arquivo)
$notas = [];


/*
Inicialização: A variável $i é inicializada com o valor 1. Isso significa que o loop começará a acessar os parâmetros a partir do segundo elemento, já que o primeiro elemento ($argv[0]) é o nome do script.

Condição de Repetição: O loop continuará enquanto $i for menor que $argc, que representa o número total de argumentos passados. Isso garante que o loop não acesse índices que não existem no array $argv.

Incremento: Após cada iteração, $i é incrementado em 1 ($i++), permitindo que o loop avance para o próximo parâmetro.
*/
$contador = 1;
for ($contador; $contador < $argc; $contador++) { // argc é o número de argumentos passados no terminal
    $notas[] = (float) $argv[$contador]; // Adiciona o valor do argumento atual ao array $notas
}


// var_dump($notas);


/*
$somaDeNotas = 0;
foreach ($notas as $nota) { // Para cada NOTA dentro de NOTAS
    $somaDeNotas += $nota; // Adiciona o valor da nota atual à variável $somaDeNotas
}


/*
O loop começa com $contador igual a 1.
Enquanto o valor em $argv[$contador] não for 0, o loop continua.
A cada iteração, o valor atual de $argv[$contador] é somado a $somaDeNotas.
O contador é incrementado, passando para o próximo argumento.
Quando um 0 é encontrado, o loop para, e a soma total das notas é armazenada em $somaDeNotas.
*/
// while ($argv[$contador] != 0) {
//     $somaDeNotas += $argv[$contador++];
// }´
//
// do {
//  alguma ação
// } while (condição);


$notaFilme =  array_sum($notas) / $quantidadeDeNotas; // Calcula a média das notas
$planoPrime = false;
$primeStatus = $planoPrime ? "{ Plano ativado }" : "{ Plano desativado }"; // operador ternário (se $planoPrime for true retorna ativo)


// resultado no terminal
echo "$primeStatus\n\n";
echo "-\t Filme: " . $nomeFilme . "\n";
echo "-\t Nota do filme: $notaFilme\n";
echo "-\t Ano de lançamento: $anoLancamento\n";


exibeMensagemLancamento($anoLancamento, $planoPrime); // Chamando a função exibeMensagemLancamento


$genero = match ($nomeFilme) {
    "Sonic 3" => "Ação/Aventura",
    "Harry Potter" => "Fantasia",
    "Velozes e Furiosos" => "Ação",
    default => "Gênero desconhecido"
}; // A expressão match é utilizada para comparar o valor de uma variável (neste caso, $nomeFilme) com uma série de valores possíveis. Se houver uma correspondência, o valor associado a essa correspondência será atribuído à variável $genero


echo "-\t O gênero do filme é: $genero";