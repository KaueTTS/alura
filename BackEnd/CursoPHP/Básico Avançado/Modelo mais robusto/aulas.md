# [ Aula 1 ]
## Resumo da Aula: Método construtor

Neste vídeo, aprendemos sobre a importância do **método construtor** na programação orientada a objetos em PHP, especialmente na classe `Filme`. O construtor é um método especial que é chamado automaticamente ao instanciar um objeto, permitindo que definamos as propriedades essenciais do filme, como nome, ano de lançamento e gênero, no momento da criação.

Vimos como eliminar a criação de objetos em estados inconsistentes, utilizando o construtor para inicializar as propriedades diretamente. Também discutimos a **promoção de parâmetros**, que simplifica o código ao permitir que os parâmetros do construtor sejam automaticamente transformados em propriedades da classe.

Além disso, abordamos a eliminação dos métodos **setter**, mantendo apenas os **getters** para acessar as propriedades, garantindo assim o encapsulamento e a segurança dos dados. O vídeo conclui ressaltando a importância da tipagem das propriedades e a necessidade de praticar para entender bem os conceitos apresentados.
<br>

# [ Aula 2 ]
## Resumo da Aula: Propriedades para leitura

Nesta aula, aprendemos sobre as propriedades `readonly` em PHP, que permitem que certas propriedades de uma classe sejam acessíveis apenas para leitura após serem definidas. No exemplo da classe `Filme`, as propriedades `nome`, `anoLancamento` e `genero` foram definidas como `readonly`, o que significa que podem ser atribuídas uma única vez no construtor e não podem ser modificadas depois.

Além disso, ao torná-las públicas, eliminamos a necessidade de métodos *getters*, pois agora podemos acessar essas propriedades diretamente. Isso traz mais segurança e simplifica o código, já que não precisamos de métodos adicionais para acessar os valores.

Por fim, discutimos que, se todas as propriedades de uma classe forem `readonly`, podemos declarar a classe inteira como `readonly`, o que economiza código e melhora a modelagem. Na próxima aula, vamos explorar como definir um tipo de dados para os gêneros dos filmes, limitando as opções a uma lista finita e específica.
<br>

# [ Aula 3 ]
## Resumo da Aula: Definindo um tipo para gênero

Nesta aula, aprendemos sobre como definir um tipo para gênero utilizando *enums* no PHP. Identificamos que o gênero de um filme é um valor enumerável e, para representá-lo, criamos um arquivo chamado `Genero.php`, onde definimos a estrutura `Genero` como uma *enum* com valores como Ação, Comédia, Terror, Super-Herói e Drama.

Vimos que, ao invés de usar strings para representar o gênero em nossa classe `Filme`, podemos utilizar o tipo `Genero`, o que torna o código mais robusto e claro. Aprendemos também como instanciar um filme utilizando a nova *enum* e a importância de incluir o arquivo `Genero.php` antes do `Filme.php` no `index.php` para evitar erros.

Por fim, discutimos que essa abordagem garante que o parâmetro de gênero seja sempre um valor válido, aumentando a precisão na modelagem dos dados. Na próxima aula, abordaremos como modelar séries, que compartilham características com filmes, mas possuem suas próprias especificidades.
<br>

# O QUE APRENDEMOS?

- Conhecemos o método construtor e vimos como garantir que todos os dados sempre sejam inicializados ao criar um objeto;

- Aprendemos a modificar o acesso às nossas propriedades para que elas sejam somente para leitura com o readonly;

- Conhecemos as enums do PHP para definir tipos finitos.