# [ Aula 1 ]
## Resumo da Aula: Instalando PHPUnit

Nesta aula, aprendemos sobre a instalação do PHPUnit, uma ferramenta essencial para testes em aplicações PHP, especialmente para testes unitários. O foco foi em como utilizar o Composer para gerenciar dependências, separando as ferramentas de desenvolvimento das de produção.

### Principais Pontos:

- **Instalação do PHPUnit**: Utilizamos o comando:

    ```bash
    composer require --dev phpunit/phpunit ^12
    ```

Isso instala o PHPUnit apenas para o ambiente de desenvolvimento, evitando que ele seja incluído na produção.

**Instalação em Produção:** Para instalar as dependências em produção sem as de desenvolvimento, utilizamos o comando:
```composer install --no-dev```


**Verificação da Instalação:** Para verificar se o PHPUnit foi instalado corretamente, utilizamos o comando:
``vendor/bin/phpunit --version``
<br>

# [ Aula 2 ]
## Resumo da Aula: Escrevendo um teste

Nesta aula, exploramos como escrever testes automatizados utilizando PHPUnit, uma ferramenta essencial para garantir a qualidade do código.

Foi demonstrado um exemplo prático de como criar um teste para a classe `BuscadorDeCursos`. O teste simula requisições HTTP e verifica se o buscador retorna os cursos corretamente com base em um HTML de exemplo.

Além disso, aprendemos a executar os testes tanto no PhpStorm quanto pela linha de comando, utilizando o executável do PHPUnit que o Composer instala na pasta `vendor/bin`.

Também foi falado sobre a importância de ferramentas que ajudam a identificar erros no código, como erros de digitação em nomes de variáveis ou inconsistências de tipos, preparando o terreno para a próxima aula, onde exploraremos essas ferramentas de análise de código.
<br>

# [ Aula 3 ]
## Resumo da Aula: Instalando o PHPCS

Nesta aula, aprendemos sobre o **PHPCS (PHP_CodeSniffer)**, uma ferramenta essencial para garantir que nosso código PHP siga os padrões de codificação definidos, como a **PSR12**.

- **Instalação:**
    - Aprendemos a instalar o PHPCS como uma dependência de desenvolvimento usando o Composer:
        ```bash
        composer require --dev squizlabs/php_codesniffer
        ```
    - Isso garante que o PHPCS esteja disponível apenas no projeto atual.

- **Execução e Análise:**
    - Aprendemos a executar o PHPCS pela linha de comando para analisar o código e identificar violações de padrões:
        ```bash
        vendor\bin\phpcs --standard=PSR12 src\
        ```
    - O PHPCS aponta violações como a formatação incorreta de chaves em estruturas de controle e a quebra de linha no estilo Windows.

- **Correção de Erros:**
    - Ao corrigir os erros apontados pelo PHPCS, garantimos a consistência e a legibilidade do código, seguindo as melhores práticas de desenvolvimento.

- **Importância:**
    - Embora o PHPCS não detecte erros lógicos no código, ele é uma ferramenta valiosa para manter a qualidade e a padronização do projeto.
<br>

# [ Aula 4 ]
## Resumo da Aula: Instalando o Phan

Nesta aula, exploramos o uso do **Phan** para detectar erros no código. O Phan analisa o código em busca de possíveis problemas antes mesmo de executarmos o programa ou os testes.

Aprendemos a:

*   Instalar o Phan como uma dependência de desenvolvimento usando o Composer:

    ```bash
    composer require --dev phan/phan
    ```

*   Executar a ferramenta a partir da linha de comando, lembrando de usar o parâmetro `--allow-polyfill-parser`:

    ```bash
    vendor\bin\phan --allow-polyfill-parser src\Buscador.php
    ```

*   Criar um arquivo de configuração do Phan (`.phan/config.php`) para especificar a versão do PHP, diretórios a serem analisados e diretórios a serem ignorados.

*   Habilitar plugins para verificações adicionais no código.

Foi demonstrado que o uso do Phan é valioso para identificar erros no projeto de forma antecipada, complementando outras ferramentas de análise de código.

Por fim, a aula abordou a questão de como simplificar a execução de comandos definindo scripts personalizados no `composer.json`.
<br>

# O QUE APRENDEMOS