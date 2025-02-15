# [ Aula 1 ]
## Resumo da Aula: Modelando Episódio

Aprendemos sobre como modelar um episódio dentro do sistema de uma plataforma de streaming. A aula começou discutindo as limitações da classe `Serie`, que atualmente contém vários episódios, mas não possui uma estrutura adequada para representar cada episódio individualmente.

Decidimos criar uma nova classe chamada `Episodio`, que não herda de `Titulo`, já que um episódio não é considerado um título isoladamente no contexto do ScreenMatch. A classe `Episodio` foi implementada com um construtor que garante que cada episódio tenha os dados necessários, como a série a que pertence, o nome do episódio e o número do episódio.

Além disso, discutimos a criação de um conversor de notas para estrelas, que transforma uma avaliação de 0 a 10 em um formato de estrelas, comum em plataformas de streaming. A classe `ConversorNotaEstrela` foi introduzida para realizar essa conversão.

Por fim, abordamos a questão de como permitir que tanto títulos (séries e filmes) quanto episódios possam ser avaliados, sem que episódios herdem de `Titulo`, e deixamos essa questão para ser explorada na próxima aula. 
<br>

# [ Aula 2 ]
## Resumo da Aula: Conversor em estrelas

Nesta aula, aprendemos sobre a conversão de notas de 1 a 10 para estrelas, que vão de 0 a 5, e como isso se aplica ao sistema de avaliação de conteúdos audiovisuais chamado ScreenMatch.

## Diagrama de Classes

Começamos analisando o diagrama de classes, onde temos a classe abstrata `Titulo`, da qual `Serie` e `Filme` herdam. Também introduzimos a classe `Episodio`, que não deve herdar de `Titulo`, pois não faz sentido conceitualmente.

## Primeira Solução

Discutimos a primeira solução que seria fazer `Episodio` herdar de `Titulo`, mas isso não é adequado, pois um episódio não é um título independente. Em seguida, consideramos a ideia de usar herança múltipla com uma nova classe chamada `Avaliavel`, mas isso nos levaria ao problema do diamante, que é evitado em PHP.

## Solução com Interfaces

A solução proposta foi a utilização de **interfaces**. Criamos a interface `Avaliavel`, que pode ser implementada por `Titulo` e `Episodio`, permitindo que `Serie` e `Filme` herdem de `Titulo` e implementem os métodos da interface. Isso garante que todas as classes que implementam `Avaliavel` terão os métodos necessários sem os problemas da herança múltipla.

## Alteração no ConversorNotaEstrela

Por fim, alteramos o `ConversorNotaEstrela` para depender da interface `Avaliavel`, garantindo que qualquer instância dessa interface terá o método `media()`, que é essencial para a conversão das notas em estrelas.
<br>

# O QUE APRENDEMOS