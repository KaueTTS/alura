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