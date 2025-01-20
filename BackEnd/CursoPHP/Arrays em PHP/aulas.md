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
<br>