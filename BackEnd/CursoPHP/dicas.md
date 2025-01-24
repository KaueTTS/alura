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