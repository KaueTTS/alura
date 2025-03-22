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
## Resumoda da Aula: Compondo Scripts

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

# O QUE APRENDEMOS