# [ Aula 1 ]
## Resumo da Aula: Calculadora de maratona

Nesta aula do curso de Programação Orientada a Objetos com PHP, aprendemos a criar uma classe chamada `CalculadoraDeMaratona`, que tem como objetivo calcular a duração total de maratonas de títulos, como filmes e séries.

### Estrutura da Classe

- A classe possui um atributo privado `duracaoMaratona`, que inicia em zero e acumula a duração dos títulos incluídos.
- O método `inclui()` é responsável por adicionar a duração de um título, que pode ser um filme ou uma série. Para isso, a classe `Titulo` é utilizada como tipo de entrada, garantindo que qualquer título tenha um método `duracaoEmMinutos()`.

### Lógica de Cálculo

- Para evitar a necessidade de múltiplas condições (`if` e `else if`), a implementação do método `duracaoEmMinutos()` é feita de forma que cada tipo de título (filme ou série) tenha sua própria lógica de cálculo:
  - O filme retorna sua duração diretamente.
  - A série calcula a duração com base no número de temporadas, episódios por temporada e minutos por episódio.

### Método de Duração

- A classe `CalculadoraDeMaratona` também possui um método `duracao()`, que retorna a duração total acumulada. 

### Flexibilidade do Código

Essa estrutura permite que a calculadora trabalhe com qualquer título que herde da classe `Titulo`, tornando o código mais flexível e escalável.
<br>

# [ Aula 2 ]
## Resumo da Aula: Polimorfismo
<br>

# [ Aula 3 ]
## Resumo da Aula: