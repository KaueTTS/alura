# [ Aula 1 ]
## Resumo da Aula: PSR-4

Nesta aula, aprendemos sobre o conceito de **autoload** no PHP, especificamente seguindo a recomendação **PSR-4**. O autoload permite que o Composer carregue automaticamente nossas classes sem a necessidade de usar `require` manualmente.

Discutimos a importância do **PHP-FIG** e das **PSRs**, que são padrões que garantem a interoperabilidade entre diferentes frameworks. A **PSR-4**, em particular, define como mapear classes a arquivos, utilizando namespaces.

O namespace principal, ou **"vendor namespace"**, deve refletir o autor ou distribuidor do código, como no exemplo `Alura\BuscadorDeCursos`. Esse namespace é mapeado para uma pasta específica, como **"src"**, onde todas as classes pertencentes a ele estarão localizadas.

Além disso, se tivermos sub-namespaces, como `Alura\BuscadorDeCursos\Helper`, isso indicará que a classe correspondente estará em uma subpasta, como **"src/helper"**.

Por fim, a aula apresentou exemplos de como o mapeamento funciona, destacando a importância de que o nome do arquivo corresponda ao nome da classe, seguido da extensão `.php`. No próximo vídeo, iremos implementar essa configuração no nosso projeto.
<br>

# O QUE APRENDEMOS