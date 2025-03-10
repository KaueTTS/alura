<?php

// Define um array associativo representando uma conta bancária
$conta_bancaria = [
    "titular" => "Kauê Bertaze",
    "saldo" => 1000,
    "dinheiro" => 50,
];

// Exibe informações iniciais da conta bancária
echo "***************\n";
echo "Titular: " . $conta_bancaria['titular'] . PHP_EOL;
echo "Saldo Atual: " . $conta_bancaria['saldo'] . PHP_EOL;
echo "***************\n\n";

$sair = 0;

// Loop principal do programa, continua até que a opção de sair (4) seja escolhida
while ($sair != 4) {
    // Exibe o menu de opções
    echo "1. Depositar \n";
    echo "2. Sacar \n";
    echo "3. Ver Saldo \n";
    echo "4. Sair \n";
    echo "\nEscolha uma opção: ";
    $opcao = (int) fgets(STDIN);

    if ($opcao == 1) {
        echo "Digite o valor do depósito: ";
        $deposito = (float) fgets(STDIN);
        $conta_bancaria["saldo"] += $deposito; // Adiciona o valor do depósito ao saldo
        echo "Depósito realizado com sucesso!\n\n";
        
    } elseif ($opcao == 2) {
        echo "Digite o valor do saque: ";
        $saque = (float) fgets(STDIN);

        // Verifica se há saldo suficiente para o saque
        if ($saque > $conta_bancaria["saldo"]) {
            echo "Saldo insuficiente!\n\n";
            continue;
        } else {
            $conta_bancaria["saldo"] -= $saque; // Subtrai o valor do saque do saldo
        }

        echo "Saque realizado com sucesso!\n\n";

    } elseif ($opcao == 3) {
        echo "Saldo Atual: " . $conta_bancaria["saldo"] . "\n\n";

    } elseif ($opcao == 4) {
        echo "Saindo...\n";
        $sair = 4;

    } else {
        echo "\nOpção inválida!\nTente novamente.\n\n";

    }

}