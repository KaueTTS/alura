# [ Aula 1 ]
## Resumo da Aula: Definindo ações para o filme

Neste vídeo, aprendemos a melhorar o comportamento de um filme em PHP, utilizando programação orientada a objetos. 

1. **Criação do Arquivo**: Começamos renomeando o arquivo antigo e criando um novo arquivo `index.php`, onde exibimos uma mensagem de boas-vindas e instanciamos a classe `Filme`.

2. **Atribuição de Propriedades**: Atribuímos propriedades como nome, ano de lançamento, gênero e nota ao filme.

3. **Implementação de Funções**:
   - Implementamos uma função `avalia()` para receber várias notas e armazená-las em um array.
   - Criamos uma função `media()` para calcular a média dessas notas.

4. **Uso da Palavra Reservada `$this`**: Utilizamos a palavra reservada `$this` para acessar as propriedades do objeto dentro das funções.

5. **Chamada das Funções**: Ao final, chamamos as funções para avaliar o filme e calcular a média, garantindo que o código funcionasse corretamente e exibisse os resultados esperados.

O vídeo também introduziu a teoria por trás das funções dentro de uma classe e a importância do uso de `$this`.
<br>

# [ Aula 2 ]
## Resumo da Aula: Conhecendo os conceitos

No vídeo, aprendemos sobre a manipulação de atributos e propriedades dentro da classe `Filme`, focando na diferença entre propriedades e métodos. Cada instância de `Filme` ocupa um espaço na memória apenas para suas propriedades, enquanto os métodos, que são funções pertencentes à classe, não precisam ser copiados para cada objeto, economizando espaço. 

A variável especial `this` é introduzida, apontando para o objeto que chamou um método, permitindo o acesso correto às propriedades desse objeto. Além disso, discutimos a importância de declarar métodos como `public`, assim como fazemos com as propriedades, para que possam ser acessados fora da classe.
<br>

# [ Aula 3 ]
## Resumo da Aula: Impedindo acesso aos dados

Neste vídeo, aprendemos sobre a importância de controlar o acesso às propriedades de uma classe em PHP, utilizando o modificador de acesso `private`. O exemplo apresentado envolve uma classe `Filme`, onde a propriedade `notas` é definida como privada para evitar que seja acessada diretamente de fora da classe. Isso é crucial para evitar erros, como a remoção acidental de notas, que poderia levar a problemas como a divisão por zero ao calcular a média.

Além disso, discutimos que, embora seja possível tornar todas as propriedades privadas, isso pode impedir a criação correta de objetos da classe, já que não poderíamos atribuir valores a essas propriedades externamente. O vídeo conclui com a promessa de que, no próximo conteúdo, serão apresentadas técnicas para manter as propriedades privadas, mas ainda permitir o acesso quando necessário.
