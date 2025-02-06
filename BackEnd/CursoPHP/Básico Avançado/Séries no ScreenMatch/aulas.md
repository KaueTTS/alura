# [ Aula 1 ]
## Resumo da Aula: Modelando uma série

Nesta aula do curso de PHP sobre programação orientada a objetos, aprendemos a modelar uma série para uma plataforma de streaming, assim como já fizemos com filmes.

Iniciamos adicionando um novo atributo `$duracaoEmMinutos` à classe `Filme`, que é um atributo público e somente leitura. Em seguida, criamos a classe `Serie`, que possui características semelhantes à classe `Filme`, como nome, ano de lançamento e gênero, mas também inclui novos atributos como o número de temporadas, episódios por temporada e minutos por episódio.

Discutimos a importância de evitar a duplicação de código, já que tanto `Filme` quanto `Serie` compartilham alguns atributos e métodos, como `avalia()` e `media()`. A aula conclui com a necessidade de extrair o código comum para um lugar compartilhado, permitindo que ambas as classes reutilizem esses elementos, o que facilitará a manutenção e a evolução do código no futuro.
<br>

# [ Aula 2 ]
## Resumo da Aula: Extraindo o que é comum

Nesta aula, aprendemos sobre a importância de extrair características comuns entre classes na programação orientada a objetos, utilizando o exemplo de uma plataforma de streaming que possui filmes e séries.

1. **Criação da Classe `Titulo`**:
   - Iniciamos criando uma classe chamada `Titulo`, que armazena as propriedades comuns a filmes e séries, como nome, ano de lançamento e gênero.

2. **Remoção de Informações Duplicadas**:
   - Removemos as informações duplicadas das classes `Serie` e `Filme`, mantendo apenas as características específicas de cada uma.

3. **Uso da Herança**:
   - Utilizamos a palavra reservada `extends` para indicar que tanto `Filme` quanto `Serie` são subclasses de `Titulo`, ou seja, herdam suas propriedades e métodos. Isso nos permite evitar a duplicação de código e organizar melhor a estrutura do nosso programa.

4. **Conceito de Herança**:
   - Discutimos o conceito de herança e quando utilizá-la, enfatizando que ela deve ser aplicada quando existe um relacionamento claro de "é um" entre as classes.

A aula nos preparou para corrigir erros e implementar a herança de forma eficaz em nosso código.
<br>

# [ Aula 3 ]
## Resumo da Aula:

<br>