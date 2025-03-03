# [ Aula 1 ]
## Resumo da Aula: Problemas procedurais

O vídeo aborda os problemas da programação procedural que estamos enfrentando em nosso projeto de filme na plataforma *Screen Match*. Ele destaca que as informações sobre o filme, como nome, ano de lançamento e notas, estão dispersas em variáveis soltas, o que dificulta a organização e a manipulação dos dados.

O instrutor explica que, atualmente, estamos utilizando uma abordagem de programação procedural, onde os dados e os comportamentos estão separados, resultando em um código desestruturado. O objetivo do curso é resolver dois grandes problemas:

1. Criar coesão entre os dados e os comportamentos que manipulam esses dados.
2. Ter uma boa modelagem do que são esses dados.

O vídeo também menciona a importância de definir claramente o que é um filme e quais informações ele deve ter, preparando o terreno para a próxima aula, onde começaremos a trabalhar na estrutura de um filme dentro de um novo arquivo chamado `Filme.php`.
<br>

# [ Aula 2 ]
## Resumo da Aula: Definindo um modelo

Neste vídeo, aprendemos sobre a criação de uma estrutura chamada `Filme` utilizando a programação orientada a objetos em PHP. 

1. **Definição da Estrutura**:
   - Começamos definindo o que um filme precisa ter, como nome, ano de lançamento, gênero e nota.

2. **Introdução ao Conceito de Classe**:
   - Introduzimos o conceito de classe, criando a `class Filme` e declarando as variáveis necessárias como públicas e com seus tipos apropriados.

3. **Modificação da Função `criaFilme()`**:
   - Alteramos a função `criaFilme()` para que ela retornasse um objeto do tipo `Filme` em vez de um array associativo.
   - Aprendemos a utilizar o operador de seta (`->`) para acessar e atribuir valores às propriedades do objeto.

4. **Importância da Correspondência de Nomes**:
   - Discutimos a importância de garantir que os nomes das propriedades na classe correspondam aos usados na função.

5. **Testes e Correções**:
   - Realizamos testes para garantir que nosso código funcionasse corretamente, importando a classe `Filme` no arquivo `index.php` e corrigindo erros que surgiram durante a execução.
<br>

# [ Aula 3 ]
## Resumo da Aula: Valor vs Referência

Neste vídeo, o instrutor Vinicius Dias apresenta os conceitos fundamentais da Programação Orientada a Objetos (POO) em PHP, focando na diferença entre valor e referência. 

## Principais Pontos Abordados:

- **Criação de Objetos**: O instrutor demonstra como criar um objeto da classe `Filme`, atribuindo valores a seus atributos e utilizando o `var_dump` para visualizar o conteúdo do objeto.

- **Valor vs Referência**: É explicado que, ao instanciar um objeto, estamos criando uma referência a um espaço de memória, e não uma cópia do objeto. Exemplos práticos mostram como a alteração de um objeto através de uma variável afeta todas as variáveis que referenciam o mesmo objeto.

- **Analogias**: O instrutor utiliza analogias, como a comparação entre classes e objetos com a forma e o bolo, para facilitar a compreensão dos conceitos.
<br>

# O QUE APRENDEMOS

- Conhecemos o conceito de Programação Orientada a Objetos e vimos que a ideia é organizar nossos códigos não mais em funções, mas sim em tipos que fazem sentido em nosso sistema através da definição de classes e instâncias de objetos;

- Criamos nossa primeira classe (Filme) e aplicamos o primeiro pilar da Orientação a Objetos, a Abstração, para definir somente os atributos que serão necessários em nossa implementação;

- Entendemos como objetos são armazenados e passados por parâmetro em códigos PHP através de referências.