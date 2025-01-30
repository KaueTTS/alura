# Entendendo o Desafio

- Criar um sistema de controle de saldo bancário
- Incluir informações como titular da conta e saldo atual
- Permitir operações como consultar saldo, sacar e depositar valores, e sair do programa

# Preparando o Ambiente

- Criar um arquivo `entrada.php` para ler a entrada do usuário
- Utilizar a função `fgets(STDIN)` para capturar a entrada do usuário
- Converter a entrada para um número inteiro ou float

# Implementando o Programa

- Criar um menu com as opções: Consultar saldo, Sacar valor, Depositar valor e Sair
- Verificar a opção escolhida pelo usuário e executar a ação correspondente
- Validar se há saldo suficiente para realizar saques
- Atualizar o saldo após depósitos e saques
- Exibir mensagem de opção inválida caso o usuário digite uma opção não listada

# Código do professor

```
<?php

// Inicialização das variáveis
$saldo = 1_000.00; // Saldo inicial
$titular = "Vinicius"; // Titular da conta
$opcao = 0;

// Função para exibir o menu
function exibirMenu($saldo, $titular) {
    echo "******************\n";
    echo "Titular: $titular\n";
    echo "Saldo atual: R$" . number_format($saldo, 2) . "\n";
    echo "******************\n";
    echo "Opções:\n";
    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";
    echo "******************\n";
}

// Loop principal do programa
do {
    exibirMenu($saldo, $titular); // Exibe o menu
    echo "Escolha uma opção: ";
    $opcao = (int) fgets(STDIN); // Lê a opção do usuário

    switch ($opcao) {
        case 1:
            echo "Saldo atual: R$" . number_format($saldo, 2) . "\n";
            break;
        case 2:
            echo "Digite o valor a sacar: ";
            $valorSacar = (float) fgets(STDIN);
            if ($valorSacar > $saldo) {
                echo "Saldo insuficiente!\n";
            } else {
                $saldo -= $valorSacar;
                echo "Saque realizado com sucesso!\n";
            }
            break;
        case 3:
            echo "Digite o valor a depositar: ";
            $valorDepositar = (float) fgets(STDIN);
            $saldo += $valorDepositar;
            echo "Depósito realizado com sucesso!\n";
            break;
        case 4:
            echo "Adeus!\n";
            break;
        default:
            echo "Opção inválida!\n";
            break;
    }
} while ($opcao != 4);

?>
```