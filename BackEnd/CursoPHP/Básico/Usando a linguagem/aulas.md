# [ Aula 1 ] 
## Resumo da Aula: Manipulando arrays

Neste vídeo do curso de PHP, aprendemos sobre a manipulação de arrays utilizando algumas funções específicas da linguagem. 

### Principais Tópicos Abordados

1. **Função `var_dump()`**:
   - Utilizada para exibir o valor e o tipo de uma variável.
   - Útil para inspecionar arrays durante o desenvolvimento.

2. **Função `sort()`**:
   - Ordena os elementos de um array.
   - Demonstra o conceito de passagem de parâmetro por referência, onde alterações no array refletem na variável original.

3. **Função `min()`**:
   - Retorna o menor valor de um array sem modificar o array original.
   - Possibilidade de exibir o valor diretamente ou armazená-lo em uma variável para uso posterior.
<br>

# [ Aula 2 ]
## Resumo da Aula: Operando com textos

O vídeo aborda o uso de funções para manipular textos (strings) no PHP.

**São apresentadas as seguintes funções:**

1. `var_dump()`: exibe informações detalhadas sobre uma variável, incluindo o tipo e o valor.
   
2. `strpos()`: retorna a posição da primeira ocorrência de um caractere ou substring em uma string.
   
3. `substr()`: extrai uma substring de uma string.

O objetivo é aprender a manipular o título de um filme, separando a primeira parte (antes dos dois-pontos) da segunda parte.
<br>

# [ Aula 3 ]
## Resumo da Aula: Separando em arquivos

Neste vídeo, aprendemos sobre a importância de organizar nosso código em arquivos separados ao trabalhar com PHP. 

### Principais Pontos Abordados

1. **Criação da Pasta "screen-match"**:
   - Criamos uma nova pasta chamada "screen-match" e movemos o arquivo `screen-match.php` para dentro dela.
****
2. **Navegação entre Pastas**:
   - Aprendemos a navegar entre pastas usando o comando `cd` no terminal.

3. **Criação do Arquivo `funcoes.php`**:
   - Definimos funções que antes estavam no `screen-match.php` em um novo arquivo chamado `funcoes.php`.
   - Utilizamos a palavra reservada `require` para incluir o `funcoes.php` no arquivo principal.

4. **Caminhos Relativos e Absolutos**:
   - Discutimos a diferença entre caminhos relativos e absolutos.
   - Aprendemos a usar `__DIR__` para garantir que o PHP encontre os arquivos corretamente, independentemente de onde o código é executado.

5. **Organização do Código**:
   - A prática de manter o código organizado e separar diferentes funcionalidades em arquivos distintos foi enfatizada.
<br>