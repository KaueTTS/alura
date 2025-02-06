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

Nesta aula, aprendemos sobre o conceito de **polimorfismo** na programação orientada a objetos, utilizando PHP. 

## Principais Pontos Abordados:

1. **Inclusão de Classes**:
   - Começamos duplicando a linha de `require` para incluir a classe `CalculadoraDeMaratona`.

2. **Instanciação e Uso da Calculadora**:
   - Criamos uma instância da calculadora e utilizamos o método `inclui()` para adicionar um filme e uma série.
   - Chamamos o método `duracao()` para calcular a duração total em minutos, que é exibida na tela.

3. **Conceito de Polimorfismo**:
   - O polimorfismo permite que objetos de tipos diferentes (como filme e série) sejam tratados de maneira uniforme, desde que compartilhem um comportamento comum, neste caso, a capacidade de calcular a duração.
   - O mesmo objeto pode ser visto de formas diferentes em contextos distintos, o que é uma característica fundamental da orientação a objetos.

4. **Herança e Classes Genéricas**:
   - O polimorfismo é possível através da herança.
   - Embora possamos ter uma classe genérica como "título", na prática, sempre trabalhamos com tipos mais específicos, como filme ou série.
   - Essa ideia de classes que não podem ser instanciadas será explorada em cursos futuros.
<br>

# O QUE APRENDEMOS

- Conhecemos o quarto dos quatro pilares da Orientação a Objetos: o Polimorfismo;
- Praticamos o conceito de sobrescrita de métodos e utilizamos essa ideia para aplicar o polimorfismo na prática.