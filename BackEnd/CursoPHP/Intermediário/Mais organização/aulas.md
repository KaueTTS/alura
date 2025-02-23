# [ Aula 1 ]
## Resumo da Aula: Traits

Nesta aula, aprendemos sobre a utilização de *traits* no PHP, uma abordagem que nos ajuda a evitar a duplicação de código em classes que não têm uma relação de herança direta.

Identificamos que tanto a classe `Episodio` quanto a classe `Titulo` possuíam código duplicado relacionado à avaliação. Para resolver isso, criamos uma *trait* chamada `ComAvaliacao`, que contém a propriedade `notas` e os métodos `avalia()` e `media()`. Essa *trait* permite que classes diferentes compartilhem funcionalidades sem a necessidade de herança.

Após criar a *trait*, removemos o código duplicado das classes `Titulo` e `Episodio` e utilizamos a *trait* com a palavra reservada `use`. Assim, o PHP copia o conteúdo da *trait* para as classes que a utilizam, permitindo que ambas compartilhem a mesma funcionalidade de avaliação.

Por fim, discutimos que as *traits* são uma forma de "herança horizontal", pois não criam uma hierarquia de classes, mas sim permitem a reutilização de código de maneira organizada. Também mencionamos que é possível usar várias *traits* em uma mesma classe, mas que devemos ter cuidado com métodos com o mesmo nome em diferentes *traits*.

Essa aula nos mostrou como as *traits* podem ser uma solução eficaz para manter nosso código mais limpo e organizado.
<br>

# [ Aula 2 ]
## Resumo da Aula: Namespaces

Nesta aula, aprendemos sobre **Namespaces** no PHP, que são uma forma de organizar e agrupar classes, interfaces e traits em pastas lógicas, sem a necessidade de mover arquivos fisicamente.

### Principais Pontos Abordados:

1. **Definição de Namespace**: 
   - Um Namespace permite que classes com o mesmo nome coexistam em diferentes contextos, evitando conflitos. 
   - Exemplo: `ScreenMatch\Modelo\Avaliavel` e `ScreenMatch\Calculos\Avaliavel` podem existir sem problemas.

2. **Criação de Namespaces**: 
   - Para definir um Namespace, usamos a instrução `namespace` logo no início do arquivo. 
   - A separação é feita com barras invertidas (`\`).

3. **Uso de Namespaces**: 
   - Quando uma classe está em um Namespace, ela busca outros símbolos dentro desse mesmo Namespace. 
   - Para usar símbolos de outros Namespaces, podemos usar o nome completo ou a instrução `use`, que simplifica a chamada.

4. **Ajustes e Apelidos**: 
   - Se houver conflitos de nomes, podemos usar apelidos com a palavra-chave `as` para diferenciar os símbolos.

5. **Importação de Namespaces**: 
   - No arquivo `index.php`, podemos importar múltiplos símbolos de um Namespace usando a sintaxe de agrupamento, o que torna o código mais limpo.

Esses conceitos ajudam a manter o código organizado e a evitar conflitos de nomes, especialmente quando se trabalha com bibliotecas externas ou códigos de terceiros. Se precisar de mais detalhes sobre algum ponto específico, é só avisar!
<br>

# [ Aula 3 ]
## Resumo da Aula: Autoload


<br>

# O QUE APRENDEMOS