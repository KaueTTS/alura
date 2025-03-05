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

# O QUE APRENDEMOS