# [ Aula 1 ] 
## Resumo da Aula: Separando o código

### Analisando o Código Existente

O código atual possui uma seção responsável por exibir uma mensagem sobre o status de lançamento do filme.<br>
Essa mesma lógica pode ser necessária em outras partes da aplicação, o que pode levar à duplicação de código.

### Criação e Utilização de Funções

O instrutor demonstra como extrair o trecho de código responsável pela exibição da mensagem de lançamento e transformá-lo em uma função.<br>
A função é nomeada como ``exibeMensagemLancamento()`` e recebe o ano de lançamento do filme como parâmetro.<br>
Essa função pode ser chamada em diferentes partes da aplicação, evitando a duplicação de código.
<br>

# [ Aula 2 ] 
## Resumo da Aula: Funções e retorno

O vídeo aborda a criação de uma função chamada `incluidoNoPlano()` para verificar se um filme está incluído no plano do usuário.<br>
Essa verificação envolve checar se o `$planoPrime` é verdadeiro ou se o `$anoLancamento` é menor que 2020.<br>
Inicialmente, a função apenas continha essa lógica de verificação, mas não retornava nenhum valor.<br>

Para resolver isso, foi introduzida a palavra-chave `return`, que faz a função devolver o resultado da expressão de verificação.<br>
Dessa forma, ao chamar a função `incluidoNoPlano()` passando os parâmetros necessários, ela retorna um valor booleano (`true` ou `false`) indicando se o filme está incluído no plano ou não.<br>

Isso permite reutilizar essa lógica de verificação em diferentes partes da aplicação, evitando duplicação de código.<br>
O vídeo também menciona que no próximo passo será abordado como especificar os tipos de dados dos parâmetros e do retorno da função, tornando-a mais confiável.
<br>

# [ Aula 3 ] 
## Resumo da Aula: Adicionando tipos

### Funções Matemáticas e Funções em Programação

Em matemática, uma função define uma relação entre um parâmetro de entrada (x) e um valor de saída (y).<br>
Esse conceito de funções matemáticas foi incorporado à programação, mas com algumas diferenças.<br>
Enquanto funções matemáticas trabalham apenas com valores numéricos, funções em programação podem receber e retornar diferentes tipos de dados.

### Especificando Tipos de Funções

Para evitar problemas com tipos de dados incorretos, a aula mostrou como especificar os tipos dos parâmetros de uma função em PHP.<br>
Antes de cada parâmetro, é possível informar o tipo esperado, como `int` para inteiros e `bool` para booleanos.<br>
Isso faz com que o PHP gere um erro caso um tipo de dado incorreto seja passado como argumento.<br>
Além dos parâmetros, também é possível especificar o tipo de retorno da função, usando a sintaxe `:tipo` após os parâmetros.<br>
Isso inclui o uso de `void` para indicar que a função não retorna nenhum valor.

### Benefícios do Uso de Tipos

O uso de tipos torna o código mais robusto e seguro, evitando erros causados por valores incorretos.<br>
Ferramentas como IDEs e editores de texto podem fornecer avisos sobre erros de tipos, mesmo antes de executar o código.<br>
Isso aumenta a confiabilidade e a manutenibilidade do código, pois outros desenvolvedores podem entender melhor o que cada função espera e retorna.
<br>

