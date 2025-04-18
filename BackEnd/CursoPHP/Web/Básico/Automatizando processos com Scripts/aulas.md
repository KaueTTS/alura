# [ Aula 1 ]
## Resumo da Aula: Scripts no JSON

Nesta aula, aprendemos como automatizar processos utilizando scripts no `composer.json`.

1.  **Scripts no JSON:**
    *   Podemos adicionar uma seção `scripts` no `composer.json` para definir comandos personalizados.
    *   Exemplo: Criamos um script `test` para executar o PHPUnit, simplificando o comando extenso `vendor\bin\phpunit tests\TestBuscadorDeCursos.php` para apenas `composer test`.
2.  **Vantagens:**
    *   O Composer busca automaticamente os comandos na pasta `vendor\bin`, então não precisamos especificar o diretório completo.
3.  **Exemplos:**
    *   Criamos um script `cs` para o PHP CodeSniffer (`phpcs --standard=PSR12 src/`) e corrigimos um erro ao adicionar o diretório a ser verificado.
    *   Adicionamos um script `phan` para rodar a análise estática com `vendor\bin\phan -allow-polyfill-parser`.
4.  **Pipelines de Deploy:**
    *   Podemos usar scripts para criar pipelines de deploy, executando uma sequência de comandos (como verificar erros, garantir padrões de código e rodar testes) antes de fazer um commit.

Em resumo, a aula mostrou como usar scripts no `composer.json` para automatizar tarefas e criar fluxos de trabalho mais eficientes.
<br>

# [ Aula 2 ]
## Resumo da Aula: Compondo Scripts

Nesta aula, aprendemos a automatizar processos com scripts no Composer, criando um script que executa outros três scripts (`phan`, `cs` e `test`) em sequência. Para isso, utilizamos a composição de scripts, referenciando os scripts existentes com o símbolo `@` na frente de cada um na lista do script "check" no `composer.json`.

```json
"scripts": {
    "test": "phpunit tests\\TestBuscadorDeCursos.php",
    "cs": "phpcs --standard=PSR12 src/",
    "phan": "phan --allow-polyfill-parser",
    "check": [
        "@phan",
        "@cs",
        "@test"
    ]
}
```

Além disso, aprendemos a adicionar descrições personalizadas para os scripts no composer.json usando a chave scripts-descriptions, o que facilita a identificação e o uso dos scripts ao executar o comando composer list.

```json
"scripts-descriptions": {
    "check": "Roda as verificações do código. PHAN, PHPCS e PHPUNIT"
}
```
<br>

# [ Aula 3 ]
## Resumo da Aula: Mais sobre scripts

Nesta aula, aprendemos sobre a automação de processos utilizando scripts no Composer. Vimos que, além de executar comandos que o Composer já baixou, é possível rodar qualquer comando do sistema operacional através dele.

### Exemplos Práticos

- **Script `ls`**: Criamos um script chamado `ls`, que executa o comando `dir` no Windows, permitindo listar o diretório atual.
  
- **Comando `limpa-cache`**: Discutimos a criação um de comando `limpa-cache`, que executa `del cache`, para remover um diretório de cache, demonstrando a flexibilidade dos scripts.

### Execução de Códigos PHP

Além disso, mencionamos a possibilidade de executar códigos PHP diretamente, como um método de uma classe, através de um comando específico.

### Automação de Tarefas

Por fim, abordamos a ideia de automatizar tarefas, como limpar o cache e rodar testes sempre que executamos `composer update`, para garantir que as dependências sejam atualizadas sem preocupações.
<br>

# [ Aula 4 ]
## Resumo da Aula: Eventos e scripts

Nesta aula, aprendemos sobre a automação de processos utilizando scripts no Composer. O foco foi em como criar e gerenciar scripts personalizados que podem ser executados em resposta a eventos específicos, como:

- `pre-install-cmd`
- `post-install-cmd`
- `pre-update-cmd`
- `post-update-cmd`

Vimos que, ao rodar o comando `composer update`, o Composer pode buscar atualizações, instalá-las e, em seguida, executar scripts definidos, como o `@test`, que invoca o PHPUnit para realizar testes.

Além disso, exploramos a seção `scripts` do arquivo `composer.json`, onde podemos definir comandos que serão executados automaticamente após a instalação ou atualização das dependências. Exemplos de scripts incluem a execução de ferramentas de análise de código e limpeza de cache.

Por fim, discutimos a importância dessa automação, especialmente em ambientes de integração contínua, onde scripts do Composer podem facilitar o processo de build e deploy do código. Na próxima aula, abordaremos como disponibilizar o código para outros usuários.
<br>

# O QUE APRENDEMOS

- scripts são definidos dentro do composer.json;
- scripts podem definir comandos que chamam ferramentas instaladas pelo Composer;
- scripts podem chamar comandos do sistema operacional;
- scripts podem chamar códigos PHP;
- scripts podem ser associados ao evento.