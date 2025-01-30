# [ Aula 1 ] 
## Resumo da Aula: Lista de valores

### Introdução aos Arrays
- Os *arrays* são uma estrutura de dados fundamental em PHP, permitindo armazenar múltiplos valores em uma única variável.
- O `$argv` é um exemplo de *array* utilizado em PHP.

### Sintaxe do Array
- Um *array* pode ser criado utilizando colchetes `[]` ou a função `array()`.
- Exemplo de criação de um *array* de notas:
  ```php
  $notasParaOFilme = [
      10, 
      8, 
      9, 
      7.5, 
      5, 
      6.8
  ];

echo ``$notasParaOFilme[0];`` // Acessa o primeiro elemento da nota (ou seja, o numero 10)
<br>

# [ Aula 2 ] 
## Resumo da Aula: Nomeando informações

### Introdução aos Arrays
- O *array* em PHP é uma estrutura poderosa e amplamente utilizada.
- Dados externos, como formulários da web, geralmente vêm em formato de **dicionário** ou **mapa**.

### Array Associativo
- Um *array associativo* permite usar strings como chaves em vez de índices numéricos.
- Exemplo de um array associativo para um filme:

```php
$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói"
];
```

Para acessar um valor, utiliza-se a variável do array e a chave entre colchetes.

Exemplo para acessar o nome do filme:

```echo $filme['nome']; // Exibe "Thor: Ragnarok"```

<br>

# [ Aula 3 ] 
## Resumo da Aula: Manipulando arrays

### Introdução
- A aula aborda a manipulação de arrays em PHP, focando na criação e manipulação de um array de notas.

### Criando um Array
- Inicializamos um array vazio: `$notas = [];`
- Adicionamos itens ao array dentro de um loop `for`, utilizando a posição correta.

### Alterando o Tipo
- As notas são inicialmente do tipo string. Utilizamos `(float)` para convertê-las em números.

### Adicionando Itens
- Itens podem ser adicionados ao final do array usando `$notas[] = (float)$argv[$contador];`.

### Somando Itens do Array
- Utilizamos um loop `for` para somar as notas, começando o contador em 0 e utilizando `count()` para determinar o tamanho do array.

### Loop `foreach`
- O loop `foreach` é introduzido como uma maneira mais simples de iterar sobre os elementos do array.

### Função `array_sum`
- A função `array_sum` é apresentada como uma forma simplificada de somar os elementos de um array.

### Conclusão
- A aula encerra com a importância dos arrays em PHP e a promessa de desafios práticos na próxima aula.

<br>

# O QUE APRENDEMOS?

- Conhecemos o array, um dos tipos de dados mais importantes do PHP, sendo útil em determinados cenários e amplamente utilizado;

- Entendemos que arrays podem ser numéricos (em que os índices são números) ou associativos (em que as chaves são strings);

- Aprendemos a manipular arrays, adicionando itens, lendo itens e até executando funções em arrays;

- Conhecemos um tipo de loop específico para manipular itens semelhantes a um array: o foreach.