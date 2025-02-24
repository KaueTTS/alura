# [ \n ]
```
Ao colocar no texto, ele vai pular uma linha

Exemplo:

echo "Kaue\n está aqui" 

    Kaue
    está aqui

Onde "Kaue" vai estar na linha de cima e "está aqui" vai estar na linha de baixo
```
<br>

# [ \t ]
```
Ao colocar no texto, ele vai dar um espaçamento no texto 

Exemplo:

echo "\t Esse é o texto no terminal" 

    (espaçamento) Esse é o texto no terminal
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

echo "Digite seu nome: "
$nome = (float) fgets(STDIN);
echo "Olá, $nome"

Ou seja, o que você digitar no terminal será armazenado na variável $nome
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

# [ rsort() ]
```
A função sort() em PHP é utilizada para ordenar os elementos de um array em ordem descrescente.

Exemplo:

$notas = [0, 8, 7, 8.5, 5, 9.3];
rsort($notas);
var_dump($notas);

Após a execução do código acima, o array $notas será ordenado como [9.3, 8.5, 8, 7, 5, 7]
```
<br>

# [ min() ]
```
A função min() em PHP é utilizada para encontrar o menor valor em um array ou entre uma lista de valores.

Exemplo:

$notas = [10, 7, 8.5, 5, 9.3];
$menorNota = min($notas);
echo $menorNota; // Saída: 5
```
<br>

# [strpos() ]
```
A função strpos() é usada para encontrar a posição da primeira ocorrência de um determinado caractere ou substring em uma string.

Sua sintaxe é a seguinte:

strpos(string $haystack, string $needle, int $offset = 0): int|false

Onde:

- $haystack: é a string na qual você está procurando.
- $needle: é o caractere ou substring que você está procurando.
- $offset: é um parâmetro opcional que especifica a posição a partir da qual você deseja iniciar a pesquisa (o padrão é 0, ou seja, o início da string).

Exemplo: 

Se tivermos a string "Thor: Ragnarok" e quisermos encontrar a posição do caractere :, podemos usar a seguinte chamada:

$posicaoDoisPontos = strpos($filme['nome'], ':');

Neste caso, $posicaoDoisPontos receberia o valor 4, pois o caractere : está na posição 4 da string.

```
<br>

# [ substr() ]
```
A função substr() no PHP é usada para extrair uma substring de uma string.

A função substr() retorna a substring extraída da string original.

Exemplo:

$nome = "Thor: Ragnarok";

// Extrair a substring a partir da posição 0 até o final
$primeiraParte = substr($nome, 0);
// Resultado: "Thor: Ragnarok"

// Extrair a substring a partir da posição 0 até a posição 4 (exclusive)
$primeiraParte = substr($nome, 0, 4);
// Resultado: "Thor"

// Extrair a substring a partir da posição 6 até o final
$segundaParte = substr($nome, 6);
// Resultado: "Ragnarok"


No primeiro exemplo, substr($nome, 0) extrai a substring a partir da posição 0 (início da string) até o final da string.

No segundo exemplo, substr($nome, 0, 4) extrai a substring a partir da posição 0 até a posição 4 (exclusive), ou seja, os 4 primeiros caracteres da string.

No terceiro exemplo, substr($nome, 6) extrai a substring a partir da posição 6 (após os dois-pontos) até o final da string.
```
<br>

# [ explode() ]
```
A função explode() no PHP é utilizada para dividir uma string em um array, com base em um delimitador especificado. Por exemplo, se você tiver uma string com palavras separadas por vírgulas, pode usar explode() para criar um array onde cada elemento é uma palavra da string original. É muito útil para manipulação de strings e processamento de dados.

Exemplo:

$frutas = "maçã,banana,laranja";
$arrayFrutas = explode(",", $frutas);
// Resultado: $arrayFrutas = ["maçã", "banana", "laranja"];
```
<br>

# [ json_encode() ]
```
A função json_encode() em PHP é utilizada para converter uma variável PHP, como um array ou um objeto, em uma string no formato JSON (JavaScript Object Notation). Essa função é muito útil quando precisamos exportar dados de uma aplicação PHP para serem utilizados em outras linguagens ou sistemas, especialmente no contexto de aplicações web.

Exemplo:

$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói",
];

Para converter esse array em uma string JSON, você usaria a função json_encode() da seguinte forma:

$jsonFilme = json_encode($filme);
echo $jsonFilme;

// saída
{"nome":"Thor: Ragnarok","ano":2021,"nota":7.8,"genero":"super-herói"}
```
<br>

# [ json_decode() ]
```
A função json_decode é uma função do PHP que tem como objetivo converter uma string no formato JSON (JavaScript Object Notation) em uma estrutura de dados do PHP, como um array ou um objeto. Essa função é bastante útil quando você está lidando com dados que vêm de APIs ou de arquivos JSON, permitindo que você manipule esses dados de forma mais fácil em seu código.

Exemplo:

$json = '{"nome": "Filme Exemplo", "ano": 2023, "genero": "Ação"}';
$filme = json_decode($json, true); // Retorna um array associativo

echo $filme['nome']; // Saída: Filme Exemplo
echo $filme['ano'];  // Saída: 2023
```
<br>

# [ file_put_contents() ]
```
A função file_put_contents() é uma função do PHP que permite gravar dados em um arquivo. É uma maneira prática e rápida de criar ou sobrescrever arquivos com conteúdo específico. Essa função é bastante útil quando você precisa salvar informações, como logs, dados de configuração ou qualquer outro tipo de conteúdo gerado dinamicamente.

Exemplo:

$nomeArquivo = 'exemplo.txt';
$conteudo = "Olá, este é um exemplo de uso da função file_put_contents!\n";

// Grava o conteúdo no arquivo
$resultado = file_put_contents($nomeArquivo, $conteudo);

if ($resultado !== false) {
    echo "Conteúdo gravado com sucesso!";
} else {
    echo "Erro ao gravar o conteúdo.";
}
```
<br>

# [ header() ]
```
A função header() é uma função do PHP que permite enviar cabeçalhos HTTP para o cliente (navegador). Essa função é fundamental para controlar como o conteúdo é tratado pelo navegador, como redirecionamentos, tipos de conteúdo, cache e muito mais.

Exemplo:

1. Redirecionamento: Você pode usar a função header() para redirecionar o usuário para outra página:

header('Location: http://www.exemplo.com');
exit(); // É importante usar exit() após um redirecionamento

2. Definindo o Tipo de Conteúdo: Você pode especificar o tipo de conteúdo que está sendo enviado:

header('Content-Type: application/json');

3. Controlando o Cache: Você pode controlar o comportamento de cache do navegador:

header('Cache-Control: no-cache, no-store, must-revalidate'); // Para não armazenar em cache
header('Pragma: no-cache'); // Para navegadores antigos
header('Expires: 0'); // Para expirar imediatamente
```
<br>

# [ file_get_contents ]
```
A função `file_get_contents()` em PHP é usada para ler o conteúdo de um arquivo em uma string. É uma maneira simples e eficiente de obter o conteúdo de um arquivo inteiro em uma única operação.

Exemplo:

// Definição do Nome do Arquivo
$filename = 'exemplo.txt';

// Lê o conteúdo do arquivo
$conteudo = file_get_contents($filename);

// Verificação e Exibição do Conteúdo:
if ($conteudo !== false) {
    echo "Conteúdo do arquivo:\n";
    echo $conteudo;
} else {
    echo "Erro ao ler o arquivo.";
}
```
<br>

# [ readonly ]
```
O conceito de `readonly` foi introduzido na versão **8.1** do PHP e permite definir propriedades de uma classe que podem ser atribuídas apenas uma vez, geralmente no momento da construção do objeto. 

- **Atribuição Única**: Você pode definir o valor da propriedade no construtor da classe, mas não poderá mudá-lo depois.
- **Imutabilidade**: Isso garante que certas informações permaneçam constantes e não sejam acidentalmente modificadas em outras partes do código.

Exemplo:

class Exemplo {
    public readonly string $propriedade;

    public function __construct(string $valor) {
        $this->propriedade = $valor;
    }
}

$exemplo = new Exemplo("Valor Inicial");
// $exemplo->propriedade = "Novo Valor"; // Isso causaria um erro
```
<br>

# [ class ]
```
Uma classe é um modelo que define a estrutura e o comportamento de um objeto. Ela é um dos pilares da programação orientada a objetos (POO) e permite que você agrupe dados e funções que operam sobre esses dados.

Uma classe pode conter:

    Propriedades: São variáveis que armazenam o estado do objeto. Elas podem ser públicas, privadas ou protegidas.

    Métodos: São funções que definem o comportamento do objeto. Eles podem manipular as propriedades da classe e realizar ações.

Exemplo:

class Carro {
    public string $modelo;
    public string $cor;

    public function __construct(string $modelo, string $cor) {
        $this->modelo = $modelo;
        $this->cor = $cor;
    }

    public function exibirDetalhes() {
        return "Modelo: $this->modelo, Cor: $this->cor";
    }
}

$meuCarro = new Carro("Fusca", "azul");
echo $meuCarro->exibirDetalhes(); // Saída: Modelo: Fusca, Cor: azul

Instanciação: Para usar uma classe, você cria uma instância dela, que é um objeto. No exemplo acima, $meuCarro é uma instância da classe Carro.

Construtor: O método __construct é chamado automaticamente quando um objeto é criado. Ele é usado para inicializar as propriedades do objeto.

Encapsulamento: Você pode controlar o acesso às propriedades e métodos usando modificadores de visibilidade (public, private, protected).
```
<br>

# [ public / private / protected ]
```
Os modificadores de visibilidade public e private em PHP são usados para controlar o acesso às propriedades e métodos de uma classe. Eles são fundamentais para o conceito de encapsulamento na programação orientada a objetos.

Public

    Acesso: Quando uma propriedade ou método é declarado como public, ele pode ser acessado de qualquer lugar, tanto dentro da classe quanto fora dela. Isso significa que qualquer código que tenha uma referência ao objeto pode acessar e modificar essas propriedades ou chamar esses métodos.

Exemplo:

class Exemplo {
    public string $mensagem;

    public function __construct(string $mensagem) {
        $this->mensagem = $mensagem;
    }

    public function mostrarMensagem() {
        return $this->mensagem;
    }
}

$objeto = new Exemplo("Olá, mundo!");
echo $objeto->mostrarMensagem(); // Saída: Olá, mundo!


Private

    Acesso: Quando uma propriedade ou método é declarado como private, ele só pode ser acessado dentro da própria classe. Isso significa que nenhum código fora da classe pode acessar ou modificar essas propriedades ou chamar esses métodos. Isso é útil para proteger dados sensíveis e garantir que a lógica interna da classe não seja alterada de fora.

Exemplo: 

class Exemplo {
    private string $mensagem;

    public function __construct(string $mensagem) {
        $this->mensagem = $mensagem;
    }

    public function mostrarMensagem() {
        return $this->mensagem;
    }
}

$objeto = new Exemplo("Olá, mundo!");
// echo $objeto->mensagem; // Isso causaria um erro, pois $mensagem é private
echo $objeto->mostrarMensagem(); // Saída: Olá, mundo!


Protected 

    Atributos ou métodos declarados como protected podem ser acessados dentro da própria classe e também em suas subclasses. No entanto, não podem ser acessados de fora da classe. Isso permite que as subclasses utilizem e modifiquem esses atributos diretamente, mantendo um nível de proteção em relação ao acesso externo.

Public: Acessível de qualquer lugar.
Private: Acessível apenas dentro da própria classe.
Protected: Acessível para classes e subclasses.
```
<br>

# [ __construct ]
```
O método __construct é um método especial em PHP conhecido como construtor. Ele é chamado automaticamente quando uma nova instância de uma classe é criada. O principal objetivo do construtor é inicializar as propriedades do objeto e preparar o estado inicial do mesmo.

Características do __construct

    1. Inicialização: O construtor é usado para definir valores iniciais para as propriedades do objeto. Isso é especialmente útil quando você deseja garantir que o objeto comece em um estado válido.

    2. Parâmetros: O construtor pode aceitar parâmetros, permitindo que você passe valores ao criar a instância do objeto. Esses valores podem ser usados para inicializar as propriedades.

    3. Não Retorna Valor: O método __construct não deve retornar nenhum valor. Seu propósito é apenas configurar o objeto.

Exemplo:

class Carro {
    public string $modelo;
    public string $cor;

    // Construtor
    public function __construct(string $modelo, string $cor) {
        $this->modelo = $modelo; // Inicializa a propriedade modelo
        $this->cor = $cor;       // Inicializa a propriedade cor
    }

    public function exibirDetalhes() {
        return "Modelo: $this->modelo, Cor: $this->cor";
    }
}

// Criando uma nova instância da classe Carro
$meuCarro = new Carro("Fusca", "azul");
echo $meuCarro->exibirDetalhes(); // Saída: Modelo: Fusca, Cor: azul
```
<br>

# [ enum ]
```
Um enum (abreviação de "enumeration") é um tipo especial de dado que permite definir um conjunto finito de valores possíveis. Em vez de usar strings ou números para representar esses valores, um enum fornece uma maneira mais clara e segura de trabalhar com dados que têm um número limitado de opções.

Por que usar enums?

    1. Clareza: Ao usar enums, você torna o código mais legível. Em vez de passar strings como "ação", "comédia", "terror", você usa valores bem definidos como Genero::Acao, o que deixa claro que esses valores são específicos e limitados.

    2. Segurança: Com enums, você garante que apenas os valores definidos podem ser usados. Se alguém tentar passar um valor que não está na lista de enums, o código gerará um erro. Isso ajuda a evitar bugs e garante que os dados sejam válidos.

    3. Organização: Enums ajudam a organizar o código, agrupando valores relacionados em um único tipo. Isso facilita a manutenção e a compreensão do código.

Exemplo:

enum Genero {
    case Acao;
    case Comedia;
    case Terror;
    case SuperHeroi;
    case Drama;
}

$filme = new Filme(
    'Thor: Ragnarok',
    2021,
    Genero::SuperHeroi
);

```
<br>

# [ match() ]
```
Ela é semelhante à estrutura switch, mas com algumas diferenças importantes. A expressão match é mais concisa, retorna um valor e não requer break para evitar o "fall-through".

Exemplo:

$nota = 85;

$resultado = match (true) {
    $nota >= 90 => 'A',
    $nota >= 80 => 'B',
    $nota >= 70 => 'C',
    $nota >= 60 => 'D',
    default => 'F',
};

echo "A nota é: $resultado";
```
<br>

# [ extends ]
```
No PHP, a palavra reservada extends é utilizada para criar uma subclasse que herda as propriedades e métodos de uma superclasse (ou classe pai). Isso faz parte do conceito de herança, que é um dos pilares da programação orientada a objetos.

Como funciona a herança?

    Quando uma classe estende outra, ela herda todas as características da classe pai, podendo também adicionar novas propriedades e métodos ou sobrescrever os métodos existentes. Isso permite que você reutilize código e crie uma hierarquia de classes mais organizada.

Exemplo:

class Animal {
    public function fazerSom() {
        return "Som de animal";
    }
}

class Gato extends Animal {
    public function fazerSom() {
        return "Miau";
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        return "Au Au";
    }
}

$gato = new Gato();
$cachorro = new Cachorro();

echo $gato->fazerSom(); // Saída: Miau
echo $cachorro->fazerSom(); // Saída: Au Au
?>

1. Classe Pai (Animal):
A classe Animal possui um método chamado fazerSom(), que retorna uma string genérica.

2. Subclasses (Gato e Cachorro):
As classes Gato e Cachorro estendem a classe Animal. Isso significa que elas herdam o método fazerSom().
Ambas as subclasses sobrescrevem o método fazerSom() para fornecer um som específico de cada animal.

3. Instanciando as Classes:
Criamos instâncias de Gato e Cachorro e chamamos o método fazerSom(), que retorna o som específico de cada um.
```
<br>

# [ #[Override] ]
```
O atributo #[Override] é uma anotação que você pode usar em PHP para indicar que um método está sobrescrevendo um método da classe pai. Essa prática é muito útil, pois ajuda a tornar o código mais claro e a evitar erros.

Quando você utiliza #[Override], está sinalizando para quem lê o código (e também para a IDE) que aquele método é uma implementação específica de um método que já existe na classe base. Isso traz algumas vantagens:

    1. *Clareza*: Fica evidente que o método foi criado para substituir uma implementação anterior, facilitando a compreensão do código.

    2. *Verificação de Erros*: Se você escrever o nome do método errado ou não corresponder à assinatura do método da classe pai, a IDE pode alertá-lo sobre isso. Assim, você evita erros que poderiam passar despercebidos.

    3. *Documentação*: Serve como uma forma de documentação, indicando que há uma relação entre o método da classe filha e o método da classe pai.

Por exemplo, se você tem uma classe Titulo com um método abstrato duracaoEmMinutos, e uma classe Filme que implementa esse método, você pode usar #[Override] na classe Filme para deixar claro que está sobrescrevendo o método da classe Titulo

Exemplo:

class Filme extends Titulo
{
    #[Override]
    public function duracaoEmMinutos(): int
    {
        return $this->duracao; // Supondo que $duracao é um atributo da classe Filme
    }
}

Dessa forma, você garante que a implementação do método duracaoEmMinutos na classe Filme está corretamente relacionada à definição na classe Titulo.
```
<br>

# [ abstract ]
```
O termo abstract em PHP é utilizado para definir classes e métodos que são abstratos. Vamos entender cada um deles:

Classe Abstrata

    Uma classe abstrata é uma classe que não pode ser instanciada diretamente. Ou seja, você não pode criar um objeto dessa classe. O principal objetivo de uma classe abstrata é servir como base para outras classes. Ela pode conter métodos abstratos (que não têm implementação) e métodos concretos (que têm implementação).

    Por exemplo, se você tem uma classe Titulo que representa um título de filme ou série, você pode torná-la abstrata para que não seja possível criar um objeto diretamente dela. Em vez disso, você criaria classes específicas, como Filme e Serie, que herdam de Titulo.

Exemplo:

abstract class Titulo
{
    abstract public function duracaoEmMinutos(): int; // Método abstrato
}

Método Abstrato

    Um método abstrato é um método que é declarado em uma classe abstrata, mas não possui uma implementação. Isso significa que qualquer classe que herde da classe abstrata deve implementar esse método. Isso garante que todas as subclasses tenham uma implementação específica para esse método.

    Por exemplo, no caso da classe Titulo, o método duracaoEmMinutos é abstrato, o que significa que cada título (seja um filme ou uma série) deve fornecer sua própria lógica para calcular a duração em minutos.

Exemplo:

class Filme extends Titulo
{
    private $duracao;

    public function __construct($duracao)
    {
        $this->duracao = $duracao;
    }

    public function duracaoEmMinutos(): int
    {
        return $this->duracao; // Implementação específica para Filme
    }
}
```
<br>

# [ interface ]
```
Uma interface no PHP define um conjunto de métodos que uma classe deve obrigatoriamente implementar. Ela não contém implementações dos métodos, apenas suas assinaturas.

A interface é usada para garantir que diferentes classes sigam um mesmo contrato, o que facilita a organização do código e a reutilização de componentes.

Características da Interface no PHP
✅ Não pode conter propriedades (atributos).
✅ Só pode conter métodos públicos (public).
✅ Os métodos não têm implementação, apenas a assinatura.
✅ Uma classe pode implementar múltiplas interfaces.

Exemplo:

<?php
// Definição da Interface
interface Animal {
    public function fazerSom();
}

// Classe Cachorro implementando a interface Animal
class Cachorro implements Animal {
    public function fazerSom() {
        return "Au au!";
    }
}

// Classe Gato implementando a mesma interface Animal
class Gato implements Animal {
    public function fazerSom() {
        return "Miau!";
    }
}

// Criando objetos e chamando os métodos
$cachorro = new Cachorro();
echo $cachorro->fazerSom(); // Saída: Au au!

$gato = new Gato();
echo $gato->fazerSom(); // Saída: Miau!
?>

Diferença entre Interface e Classe Abstrata

Característica	                    Interface	    Classe Abstrata
Pode ter métodos implementados?	    ❌ Não	       ✅ Sim
Pode ter propriedades?	            ❌ Não	       ✅ Sim
Pode ter construtores?	            ❌ Não	       ✅ Sim
Pode implementar múltiplas?	        ✅ Sim	       ❌ Não
```
<br>

# [ implements ]
```
O implements no PHP é usado para indicar que uma classe está implementando uma interface. Isso significa que a classe precisa obrigatoriamente definir os métodos declarados na interface.

Exemplo:

<?php
// Definição da Interface
interface Animal {
    public function fazerSom();
}

// Classe implementando a interface
class Cachorro implements Animal {
    public function fazerSom() {
        return "Au au!";
    }
}

// Outra classe implementando a mesma interface
class Gato implements Animal {
    public function fazerSom() {
        return "Miau!";
    }
}

// Criando instâncias e chamando os métodos
$cachorro = new Cachorro();
echo $cachorro->fazerSom(); // Saída: Au au!

$gato = new Gato();
echo $gato->fazerSom(); // Saída: Miau!
?>

O que acontece aqui?
1. Criamos a interface Animal com o método fazerSom().
2. As classes Cachorro e Gato implementam a interface e definem o método obrigatoriamente.
3. Criamos objetos das classes e chamamos os métodos normalmente.
```
<br>

# [ trait ]
```
No PHP, um "trait" é um mecanismo para reutilização de código em linguagens de herança única, como o PHP. Ele permite agrupar funcionalidades em uma única unidade e reutilizá-las em várias classes, sem a necessidade de herança múltipla.

Exemplo:

trait Loggable {
    public function log($message) {
        echo date('Y-m-d H:i:s') . ': ' . $message . PHP_EOL;
    }
}

class User {
    use Loggable;

    public function createUser($name) {
        $this->log("Usuário $name criado.");
        // ... código para criar o usuário ...
    }
}

class Product {
    use Loggable;

    public function createProduct($name) {
        $this->log("Produto $name criado.");
        // ... código para criar o produto ...
    }
}

$user = new User();
$user->createUser('João');

$product = new Product();
$product->createProduct('Camiseta');

Neste exemplo, o trait Loggable fornece um método log() que pode ser usado pelas classes User e Product. Isso evita a duplicação do código de registro em log em ambas as classes.
```
<br>

# [ spl_autoload_register ]
```
No PHP, spl_autoload_register é uma função poderosa que permite registrar várias funções de carregamento automático de classes. Isso significa que, quando você tenta usar uma classe que ainda não foi definida, o PHP chama automaticamente essas funções registradas para tentar carregar o arquivo que contém a definição da classe.

Exemplo:

<?php

function carregarClasse($nomeClasse) {
    $caminhoArquivo = __DIR__ . '/classes/' . $nomeClasse . '.php';
    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
}

spl_autoload_register('carregarClasse');

// Agora você pode usar classes sem incluí-las manualmente
$objeto = new MinhaClasse();

?>

Neste exemplo, a função carregarClasse é registrada como uma função de carregamento automático. Quando você tenta usar a classe MinhaClasse, o PHP chama automaticamente a função carregarClasse, que carrega o arquivo MinhaClasse.php.
```
<br>

# [ str_replace && str_ireplace]
```
No PHP, a função str_replace() é usada para substituir todas as ocorrências de uma substring dentro de uma string por outra substring. É uma ferramenta muito útil para manipular texto e realizar substituições em massa.

<?php

$string = "Olá mundo, mundo!";

// Substituição simples
$novaString = str_replace("mundo", "PHP", $string);
echo $novaString; // Saída: Olá PHP, PHP!

// Substituição com arrays
$string = "maçã banana laranja";
$procurar = ["maçã", "banana"];
$substituir = ["pera", "uva"];
$novaString = str_replace($procurar, $substituir, $string);
echo $novaString; // Saída: pera uva laranja

// Contando substituições
$string = "Olá mundo, mundo!";
$contagem = 0;
$novaString = str_replace("mundo", "PHP", $string, $contagem);
echo "Substituições: " . $contagem; // Saída: Substituições: 2

?>

Diferença entre str_replace() e str_ireplace():

str_replace() é sensível a maiúsculas e minúsculas.
str_ireplace() é insensível a maiúsculas e minúsculas.
```
<br>

# [ require_once ]
```
No PHP, require_once é uma instrução usada para incluir um arquivo PHP dentro de outro script. A principal característica do require_once é que ele garante que o arquivo seja incluído apenas uma vez durante a execução do script.

Como funciona:

1. Inclusão do arquivo:
    - Quando o PHP encontra uma instrução require_once, ele tenta abrir e executar o arquivo especificado.
    - O código contido no arquivo incluído é executado como se estivesse presente no script principal.

2. Verificação de inclusão:
    - Antes de incluir o arquivo, o require_once verifica se ele já foi incluído anteriormente durante a execução do script.
    - Se o arquivo já foi incluído, o require_once ignora a instrução e não o inclui novamente.

3. Tratamento de erros:
    - Se o arquivo especificado não for encontrado, o require_once gera um erro fatal e interrompe a execução do script.

Diferença entre *require* e *require_once*:

require: Inclui o arquivo toda vez que a instrução é encontrada, mesmo que ele já tenha sido incluído anteriormente.
require_once: Inclui o arquivo apenas uma vez, evitando a inclusão duplicada.

Exemplo:

<?php

// Inclui o arquivo 'funcoes.php' apenas uma vez
require_once 'funcoes.php';

// Chama uma função definida em 'funcoes.php'
minhaFuncao();

?>

Neste exemplo, o arquivo funcoes.php será incluído apenas uma vez, mesmo que a instrução require_once seja executada várias vezes.
```
<br>

# [ try...catch ]
```
O try e catch são estruturas fundamentais para o tratamento de exceções em PHP.

O bloco *try* é onde você coloca o código que pode gerar um erro ou uma exceção. A ideia é que você "tenta" executar esse código. Se tudo correr bem, a execução continua normalmente. No entanto, se ocorrer um erro, a execução é interrompida e o controle é passado para o bloco catch.

O bloco *catch* é onde você lida com o erro que ocorreu no bloco try. Aqui, você pode especificar o tipo de exceção que deseja capturar. Por exemplo, se você espera que um erro de divisão por zero possa ocorrer, você pode capturá-lo usando catch(DivisionByZeroError $erro).

Exemplo:

Vamos imaginar que você está tentando calcular a média de notas, mas pode haver um erro de divisão por zero.

try {
    $nota = $avaliavel->media();
    return round($nota) / 2;
} catch (DivisionByZeroError $erro) {
    return 0; // Retorna 0 se houver divisão por zero
}
```
<br>

## Iniciar Servidor Local: php -S localhost:8001 -t public