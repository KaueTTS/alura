# [ \n ]
```
Ao colocar no texto, ele vai pular uma linha, 

Exemplo "Kaue\n está aqui": 

Kaue (em cima) 
está aqui (em baixo)
```
<br>

# [ \t ]
```
Ao colocar no texto, ele vai dar um espaçamento no texto 

Exemplo "\t Esse é o texto no terminal": 

        Esse é o texto no terminal
```
<br>

# [ $argv ]
```
$argv é um array que contém todos os argumentos passados para o script via linha de comando. O primeiro elemento ($argv[0]) é sempre o nome do script em si, e os elementos subsequentes são os argumentos que você passou.

Exemplo:

Vamos supor que você tenha um script chamado soma.php e você o execute da seguinte forma: php soma.php 5 10 15

O que acontece?

Valores de $argv:

$argv[0] será "soma.php" (o nome do script).
$argv[1] será "5" (primeiro argumento).
$argv[2] será "10" (segundo argumento).
$argv[3] será "15" (terceiro argumento).

Portanto, o array $argv ficará assim:

$argv = [
    "soma.php",
    "5",
    "10",
    "15"
];

```
<br>

# [ $argc ]
```
$argc é uma variável que contém o número total de argumentos passados para o script, incluindo o nome do script. Portanto, se você passar três argumentos, $argc terá o valor 4 (um para o nome do script e três para os argumentos).

Exemplo:

Vamos supor que você tenha um script chamado soma.php e você o execute da seguinte forma: php soma.php 5 10 15

O que acontece?

Você terá atribuído no seu argvc o número de argumento igual a: 4

Argumento 0: soma.php
Argumento 1: 5
Argumento 2: 10
Argumento 3: 15

```
<br>

# [ var_dump() ]
```
Serve para mostrar a lista do array

Exemplo:

php nome-do-arquivo 10 9 8 7 6

array(6) {
  [0]=>
  string(18) ".\screen-match.php"
  [1]=>
  string(2) "10"
  [2]=>
  string(1) "9"
  [3]=>
  string(1) "8"
  [4]=>
  string(1) "7"
  [5]=>
  string(1) "6"
}
``` 
<br>

# [ count() ]
```
A função count() em PHP é utilizada para contar o número de elementos em um array ou o número de propriedades em um objeto.

Exemplo:

$notas = [7.5, 8.0, 9.0];
$quantidadeDeNotas = count($notas);
echo $quantidadeDeNotas; // Saída: 3
```
<br>

# [ array_sum() ]
```
A função array_sum($notas) é uma função embutida do PHP que calcula a soma de todos os elementos de um array.

Exemplo: 

$notas = [7.5, 8.0, 9.0];
$somaTotal = array_sum($notas);
echo $somaTotal; // Saída: 24.5
```
<br>

# [ fgets(STDIN) ]
```
O *fgets* é uma função em PHP que permite ler uma linha de entrada de um arquivo.

O *STDIN* é uma constante em PHP que representa a entrada padrão do programa, ou seja, o terminal onde o programa está sendo executado. Quando usamos *fgets(STDIN)*, estamos dizendo ao PHP para ler uma linha de entrada diretamente do terminal.

É importante notar que o fgets lê a entrada como uma string, então, se você quiser trabalhar com um número, será necessário converter o tipo da variável.

Exemplo:

$numero = (float) fgets(STDIN);
```
<br>

# [ int, bool, float, string, array, object ]
```
1. int (integer): Esse tipo indica que o parâmetro deve ser um número inteiro. Ou seja, um número sem parte decimal, como 5, 10, -3, etc. Ao especificar *int* antes do parâmetro, você está informando que a função espera receber um valor inteiro naquele parâmetro.

2. bool (boolean): Esse tipo indica que o parâmetro deve ser um valor booleano, ou seja, *true* ou *false*. Ao especificar *bool* antes do parâmetro, você está informando que a função espera receber um valor verdadeiro ou falso naquele parâmetro.

3. float: Esse tipo indica que o parâmetro deve ser um número de ponto flutuante, ou seja, um número com parte decimal, como 3.14, -2.5, etc.

4. string: Esse tipo indica que o parâmetro deve ser uma cadeia de caracteres, como "Olá, mundo!" ou "João".

5. array: Esse tipo indica que o parâmetro deve ser um array, ou seja, uma coleção de valores.

6. object: Esse tipo indica que o parâmetro deve ser um objeto, ou seja, uma instância de uma classe.

Ao especificar esses tipos de dados antes dos parâmetros, você está informando ao PHP o tipo de valor que a função espera receber. Isso ajuda a evitar erros, pois o PHP pode verificar se o valor passado como argumento é do tipo correto. Caso contrário, ele irá gerar um erro.

```
<br>

# [ void ]
```
O *void* é um tipo especial em PHP que indica que a função não retorna nenhum valor.

Quando uma função é declarada com o tipo de retorno *void*, isso significa que ela não tem um valor de retorno. Ou seja, a função é executada apenas por seus efeitos colaterais, como imprimir algo na tela ou modificar algum estado, mas não devolve nenhum valor ao final da sua execução.
```
<br>

# [ sort() ]
```
A função sort() em PHP é utilizada para ordenar os elementos de um array em ordem crescente.

Exemplo:

$notas = [10, 7, 8.5, 5, 9.3];
sort($notas);
var_dump($notas);

Após a execução do código acima, o array $notas será ordenado como [5, 7, 8.5, 9.3, 10]
```
<br>

# [ min () ]
```
A função min() em PHP é utilizada para encontrar o menor valor em um array ou entre uma lista de valores.

Exemplo:

$notas = [10, 7, 8.5, 5, 9.3];
$menorNota = min($notas);
echo $menorNota; // Saída: 5
```
<br>