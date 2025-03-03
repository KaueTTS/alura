# [ Aula 1 ] 
## Resumo da Aula: Tomando decisões em PHP

Nesta aula, aprendemos sobre como controlar o fluxo de uma aplicação em PHP utilizando estruturas de decisão. O foco foi em como tomar decisões com base em condições, especificamente para classificar filmes de acordo com seu ano de lançamento.

### 1. Estruturas de Decisão
Utilizamos o `if`, `elseif` e `else` para criar diferentes caminhos de execução no código, dependendo do ano de lançamento do filme.

### 2. Condições
Aprendemos a usar operadores de comparação, como `>`, `<`, `>=` e `<=`, para avaliar as condições e determinar qual mensagem exibir ao usuário.

### 3. Blocos de Código
Dentro de cada condição, utilizamos chaves `{}` para definir um bloco de código que será executado se a condição for verdadeira. A indentação foi enfatizada para melhorar a legibilidade do código.

### 4. Expressões vs. Blocos Condicionais
Discutimos a diferença entre expressões, que retornam um valor, e blocos condicionais, que não podem ser armazenados em variáveis.

### 5. Exemplo Prático
Implementamos um exemplo prático onde, dependendo do ano de lançamento, o programa exibe mensagens como:
- "Esse filme é um lançamento"
- "Esse filme ainda é novo"
- "Esse filme não é um lançamento"

Com isso, conseguimos entender como controlar o fluxo da aplicação e tomar decisões com base em condições.
<br>

# [ Aula 2 ]
## Resumo da Aula: Expressão condicional

Exploramos como controlar o fluxo em PHP utilizando expressões condicionais. 

- **Atribuição de Variáveis**: Revisamos como novos valores sobrescrevem os anteriores em variáveis.
  
- **Match Expression**: Introduzimos a *match expression*, que permite associar um valor a uma variável com base em condições específicas, funcionando como uma alternativa ao `switch`.

- **Determinação de Gênero**: Aprendemos a utilizar a *match expression* para determinar o gênero de um filme com base no nome armazenado na variável `$nomeFilme`. Destacamos a importância de incluir um caso padrão (`default`) para lidar com valores que não correspondem a nenhuma opção.

- **Diferença entre `if` e Match**: Enfatizamos que a *match expression* é uma expressão que retorna um valor, enquanto o `if` não.
<br>

# [ Aula 3 ]
## Resumo da Aula: Avaliando o filme

Aprendemos sobre como controlar o fluxo de uma aplicação em PHP utilizando a estrutura de repetição `for`. O instrutor explica como usar as variáveis `argc` e `argv` para trabalhar com parâmetros passados na linha de comando.

- **`argc`**: Indica o número de parâmetros.
- **`argv`**: Contém os valores desses parâmetros.

O instrutor demonstra como calcular a média de notas de um filme, somando as notas passadas como parâmetros e dividindo pela quantidade de notas.

### Estrutura `for`

A estrutura `for` é detalhada, mostrando suas três partes:
1. **Inicialização**
2. **Condição de repetição**
3. **Incremento**

O instrutor também menciona a possibilidade de simplificar o incremento usando o operador `++`. 

Ao final, é ressaltado que o `for` é uma das estruturas de repetição mais utilizadas no dia a dia da programação, mas que existem outras opções que serão abordadas em vídeos futuros.
<br>

# [ Aula 4 ]
## Resumo da Aula: Outros Loops

### Estruturas de Repetição

- **For Loop**: Utilizado quando sabemos o número exato de repetições. Exemplo: somar notas recebidas pela linha de comando.

- **While Loop**: Usado quando não sabemos quantas vezes vamos repetir uma ação, mas temos uma condição para parar. Exemplo: somar notas até encontrar uma nota zero.

### Exemplo de While

```php
$contador = 1;
while ($argv[$contador] != 0) {
    $somaDeNotas += $argv[$contador++];
}
```
<br>

# O QUE APRENDEMOS?

- Aprendemos a controlar o fluxo de nossa aplicação, tomando decisões baseadas em valores que podemos analisar. Utilizamos if/elseif/else para isso.

- Conhecemos uma forma de ter uma expressão condicional através de match expressions que podem “retornar” valores diferentes dependendo da condição.

- Conseguimos repetir determinadas ações sem repetir o código, através de estruturas de repetição, os famosos loops.

- Entendemos como e quando usar diferentes tipos de loops como for, while e do while.