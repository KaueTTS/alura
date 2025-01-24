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