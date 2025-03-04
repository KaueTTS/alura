# [ Aula 1 ]
## Resumo da Aula: Buscando pacotes

O objetivo é criar uma ferramenta que acesse o site da Alura, faça uma requisição HTTP e extraia dados do HTML recebido.

Para isso, serão necessários dois pacotes:
- Um para fazer a requisição HTTP (GuzzleHttp/Guzzle)
- Outro para manipular o HTML (Symfony/DomCrawler)

O Composer é o gerenciador de dependências do PHP e o Packagist é o repositório principal onde os pacotes públicos ficam disponíveis.

Além do Packagist, o Composer também pode buscar pacotes em outros locais, como repositórios privados ou arquivos zipados.
<br>

# [ Aula 2 ]
## Resumo da Aula: Instalando o Guzzle e o DomCrawler

### Gerenciando dependência com o Composer

A aula abordou o uso do Composer para gerenciar dependências em um projeto PHP.

Foram apresentadas as vantagens de utilizar pacotes como o Guzzle e o DomCrawler, que facilitam tarefas como fazer requisições HTTP e manipular HTML.

### Instalando o Guzzle

Aprendemos como instalar o Guzzle usando o comando ``composer require guzzlehttp/guzzle``.

Vimos que o Composer também instalar automaticamente as dependências do Guzzle, como os pacotes "psr" e "ralouphie".

1. PSR (PHP Standards Recommendations)
    - As PSRs são recomendações de padrões para o desenvolvimento em PHP, criadas pelo PHP-FIG (PHP Framework Interop Group). Elas visam padronizar a forma como o código PHP é escrito, facilitando a interoperabilidade entre diferentes bibliotecas e frameworks.
    - No contexto do Composer, a PSR mais relevante é a PSR-4, que define um padrão para o autoload de classes. Isso significa que o Composer pode usar as informações da PSR-4 para carregar automaticamente as classes necessárias, sem que você precise incluí-las manualmente.
    - Em resumo, as PSRs ajudam a manter o código PHP organizado, consistente e compatível.

### Utilizando o Guzzle

Foi mostrado um exemplo de como utilizar o Guzzle para fazer uma requisição HTTP e obter o conteúdo da resposta.

### Adicionando Novas Dependências

Aprendemos que podemos adicionar novas dependências diretamente no arquivo ``composer.json`` e depois rodar ``composer install`` ou ``composer update`` para instalá-las.
<br>

# [ Aula 3 ]
## Resumo da Aula: Buscando os cursos da Alura

Nesta aula, aprendemos sobre como gerenciar dependências em um projeto PHP utilizando o Composer.

### Principais tópicos abordados:

1. **Arquivos `composer.json` e `composer.lock`**
   - O `composer.json` define as dependências do projeto e suas versões mínimas.
   - O `composer.lock` armazena as versões exatas instaladas.

2. **Uso do Guzzle e DomCrawler**:
   - Utilizamos a biblioteca Guzzle para fazer requisições HTTP.
   - O DomCrawler foi utilizado para manipular o HTML retornado.
   - Aprendemos a instanciar o DomCrawler e a filtrar elementos específicos do HTML, como os nomes dos cursos disponíveis na Alura.

3. **Autoload do Composer**:
   - Discutimos a importância do autoload do Composer, que permite que o PHP encontre automaticamente as classes necessárias, evitando a inclusão manual de cada uma delas.

4. **Organização do Código**:
   - Falamos sobre a intenção de organizar o código em classes específicas para facilitar a manutenção e a reutilização futura.
<br>

# O QUE APRENDEMOS