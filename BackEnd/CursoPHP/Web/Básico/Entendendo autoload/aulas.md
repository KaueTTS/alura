# [ Aula 1 ]
## Resumo da Aula: PSR-4

Nesta aula, aprendemos sobre o conceito de **autoload** no PHP, especificamente seguindo a recomendação **PSR-4**. O autoload permite que o Composer carregue automaticamente nossas classes sem a necessidade de usar `require` manualmente.

Discutimos a importância do **PHP-FIG** e das **PSRs**, que são padrões que garantem a interoperabilidade entre diferentes frameworks. A **PSR-4**, em particular, define como mapear classes a arquivos, utilizando namespaces.

O namespace principal, ou **"vendor namespace"**, deve refletir o autor ou distribuidor do código, como no exemplo `Alura\BuscadorDeCursos`. Esse namespace é mapeado para uma pasta específica, como **"src"**, onde todas as classes pertencentes a ele estarão localizadas.

Além disso, se tivermos sub-namespaces, como `Alura\BuscadorDeCursos\Helper`, isso indicará que a classe correspondente estará em uma subpasta, como **"src/helper"**.

Por fim, a aula apresentou exemplos de como o mapeamento funciona, destacando a importância de que o nome do arquivo corresponda ao nome da classe, seguido da extensão `.php`. No próximo vídeo, iremos implementar essa configuração no nosso projeto.
<br>

# [ Aula 2 ]
## Resumo da Aula: Configurando a PSR-4

Nesta aula, aprendemos a configurar o Composer para carregar nossas classes utilizando a PSR-4. O arquivo `composer.json` é utilizado para definir as informações do projeto, incluindo a seção de `autoload`, onde podemos especificar como as classes devem ser carregadas.

A PSR-4 permite que definamos um namespace, como `Alura\\BuscadorDeCursos`, que será mapeado para uma pasta específica, no caso, "src/". Isso significa que todas as classes que começam com esse namespace serão buscadas dentro da pasta "src/". Por exemplo, a classe `Alura\BuscadorDeCursos\Service\ClasseTeste` deve estar localizada em "src/Service/ClasseTeste.php".

Após configurar o autoload, podemos remover a instrução `require` que importava o `Buscador.php` no arquivo `buscar-cursos.php`. Para que as novas configurações de autoload sejam reconhecidas, precisamos executar o comando `composer dumpautoload`, que atualiza o arquivo de autoload. Com isso, ao executar o script novamente, a aplicação funcionará corretamente, sem erros de classe não encontrada.

Por fim, a aula também menciona que, em algumas situações, podemos ter arquivos com funções auxiliares que não utilizam orientação a objetos, e que discutiremos como incluí-los no autoload na próxima aula.
<br>

# [ Aula 3 ]
## Resumo da Aula: Classmap e Files

Nesta aula, aprendemos sobre o autoload no Composer, focando em duas abordagens: **Classmap** e **Files**.

### 1. Classmap
- O Classmap é uma forma de mapear classes para arquivos específicos.
- É útil quando trabalhamos com códigos legados ou projetos que não segue a PSR-4.
- Ao definir um classmap `composer.json`, podemos informar ao Composer onde encontrar as classes.
- Exemplo: se temos uma classe `Teste`, podemos mapeá-la para o arquivo `Teste.php`.
- Após rodar o comando `composer dumpautoload`, o Composer gera um arquivo que associa a classe ao seu caminho.

### 2. Files
- Essa abordagem permite incluir arquivos que contêm funções, mesmo que não estejam dentro de uma classe.
- Ao adicionar um arquivo na seção `files` do `composer.json`, garantimos que ele será carregado sempre que o autoload for chamado.
- Isso é útil para funções auxiliares que não estão encapsuladas em classes.

### Considerações Finais
- A aula também abordou a importância de renomear métodos para evitar conflitos.
- O Composer facilita a inclusão de classes e funções sem a necessidade de `require` individualmente.
- Por fim, foi mencionado que o Composer possui ferramentas na linha de comando que podem ser utilizadas para gerenciar dependências e executar testes.
<br>

# O QUE APRENDEMOS

- Conhecemos a PSR-4 (Autoloader)
- A PSR-4 define um padrão para o carregamento automático de classes
- O namespace da classe tem partes:
    - O vendor namespace (ou namespace padrão ou namespace prefixo)
        - O vendor namespace fica mapeado para uma pasta do projeto dentro do arquivo composer.json
    - Podemos ter um sub-namespace que precisa ser representado através de pastas
- Para atualizar o arquivo autoload.php baseado no composer.json, podemos rodar o comando composer dumpautoload
- Para classes que não seguem o PSR-4, podemos definir um classmap dentro do composer.json
- Para carregar um biblioteca de funções automaticamente, podemos adicionar uma entrada files no composer.json