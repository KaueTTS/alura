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

# O QUE APRENDEMOS