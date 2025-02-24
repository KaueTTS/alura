# [ Aula 1 ]
## Resumo da Aula: Média sem avaliações

Nesta aula, aprendemos a lidar com erros em PHP, especificamente com a questão de divisão por zero e como isso pode afetar a execução do nosso código.

### Criação do Arquivo `erro.php`

Começamos criando um arquivo chamado `erro.php`, onde inicializamos:
- Um objeto da classe `Serie`
- Um objeto da classe `Episodio`

Em seguida, utilizamos um conversor de notas para estrelas. Ao executar o código, encontramos um erro fatal relacionado à divisão por zero, que foi identificado através da mensagem de erro e da stack trace.

### Entendendo a Stack Trace

A stack trace nos mostra a sequência de chamadas de funções que levaram ao erro, permitindo que entendamos onde o problema ocorreu. Aprendemos que, quando um erro acontece, a execução do programa é interrompida e não continuamos a partir desse ponto.

### Importância do Fluxo de Execução

Além disso, discutimos a importância de entender o fluxo de execução e como tratar erros de forma eficaz, preparando-nos para lidar com cenários excepcionais nas próximas aulas. A aula enfatizou a importância de ler e interpretar mensagens de erro para solucionar problemas no código.
<br>

# [ Aula 2 ]
## Resumo da Aula: Tratamento de exceções

Nesta aula, aprendemos sobre o tratamento de exceções em PHP, focando especialmente no erro de divisão por zero, que é um erro comum em cálculos. A importância de ler as mensagens de erro foi destacada, pois elas frequentemente contêm informações valiosas sobre o que ocorreu.

### Principais Pontos Abordados

- **Uso de `try` e `catch`:** 
  - O bloco `try` é onde tentamos executar um código que pode gerar um erro.
  - O bloco `catch` é onde tratamos esse erro, permitindo que o programa continue a execução sem interrupções.
  
- **Tratamento de `DivisionByZeroError`:**
  - Utilizamos o `DivisionByZeroError` para capturar esse tipo específico de erro e retornar um valor padrão, como zero, caso ocorra.

- **Diferença entre Erros e Exceções:**
  - Discutimos a diferença entre erros e exceções, sendo que ambos podem alterar o fluxo da aplicação.

- **Recuperação de Informações do Erro:**
  - Aprendemos a recuperar informações sobre o erro usando o método `getMessage()`.

- **Tratamento de Múltiplos Erros:**
  - A possibilidade de tratar múltiplos erros em um único bloco `catch` foi mencionada.
<br>

# [ Aula 3 ]
## Resumo da Aula: Lidando com múltiplos tipos

Nesta aula, aprendemos sobre como lidar com diferentes tipos de erros em PHP, especialmente no contexto de cálculos de médias e manipulação de notas.

### Principais Tópicos Abordados

1. **Erro de Divisão por Zero**:
   - Discutimos o erro de divisão por zero, que é um problema comum em cálculos.

2. **Gerando Erros Propositalmente**:
   - Geramos um erro ao passar um número incorreto de argumentos para uma função, resultando em um `ArgumentCountError`.

3. **Tratamento de Múltiplos Tipos de Erro**:
   - Aprendemos a tratar múltiplos tipos de erro utilizando o operador pipe `|` no bloco `catch`, permitindo que tanto `DivisionByZeroError` quanto `ArgumentCountError` sejam tratados de forma semelhante.
   - Vimos como exibir mensagens de erro específicas, caso desejássemos.

4. **Hierarquia de Erros e Exceções**:
   - Exploramos a hierarquia de erros e exceções no PHP, consultando a documentação para entender melhor as classes de erro disponíveis, como `ArithmeticError`, `BadFunctionCallException`, entre outras.

5. **Captura Genérica de Erros**:
   - Discutimos a possibilidade de capturar erros de forma mais genérica utilizando a classe `Throwable`, que abrange todos os tipos de erros e exceções, permitindo um tratamento mais abrangente.
<br>

# O QUE APRENDEMOS

- Entendemos que mesmo que nosso código não possua erro de sintaxe, ainda é possível que erros aconteçam durante a execução;
- Aprendemos a lidar com cenários alternativos (exceções) e erros através dos blocos try e catch;
- Vimos que é possível lidar com mais de um tipo de problema definindo múltiplos blocos catch.