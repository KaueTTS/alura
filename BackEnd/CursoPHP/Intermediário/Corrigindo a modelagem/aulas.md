# [ Aula 1 ]
## Resumo da Aula: Removendo a implementação

Nesta aula, aprendemos sobre a correção da modelagem da classe `Titulo` no contexto de uma calculadora de maratona de títulos, como filmes e séries. Inicialmente, a classe `Titulo` tinha um método `duracaoEmMinutos` com uma implementação padrão, o que gerava problemas, pois a duração varia entre filmes, séries e minisséries.

Para resolver isso, decidimos transformar o método `duracaoEmMinutos` em um método abstrato, o que significa que ele não terá uma implementação na classe `Titulo`, mas deverá ser implementado nas classes que a estendem, como `Filme` e `Serie`. Isso garante que cada classe especializada forneça sua própria lógica para calcular a duração.

Adicionamos a palavra-chave `abstract` ao método, e ao fazer isso, a IDE nos ajuda a identificar se as classes que estendem `Titulo` implementam corretamente esse método. Também discutimos a importância de usar atributos como `#[Override]` para indicar que um método está sobrescrevendo um método da classe pai.

Por fim, ao tentar executar o código, percebemos que a classe `Titulo` precisa ser declarada como abstrata, pois contém métodos abstratos. Essa mudança melhora a modelagem do código e garante que as subclasses implementem a lógica necessária para calcular a duração dos títulos.
<br>