# [ Aula 1 ]
## Resumo da Aula: Servidores web

Nesta aula, aprendemos sobre como o PHP funciona na web, destacando a interação entre o cliente (navegador) e o servidor, onde o código PHP é executado. 

### Principais Pontos:

- **Servidor Web**: É um programa que aguarda requisições HTTP. Ao receber uma requisição, ele passa essa requisição para o PHP, que executa o código e devolve a resposta ao servidor, que por sua vez envia ao cliente.

- **Importância do Servidor Web**: Para trabalhar na internet, é essencial ter um servidor web. Exemplos incluem Apache e Nginx.

- **Servidor Web Embutido no PHP**: O PHP possui um servidor web embutido, permitindo que possamos rodar nossos projetos localmente.

- **Iniciando o Servidor**: Aprendemos a criar uma pasta chamada `public` e a iniciar o servidor de desenvolvimento PHP com o comando:

```bash
php -S localhost:8001 -t public
```
<br>

# [ Aula 2 ]
## Resumo da Aula: Recebendo dados do PHP

# Resumo da Aula: PHP na Web - Recebendo Dados do PHP

Nesta aula, aprendemos como receber dados de um formulário HTML usando PHP. O foco foi em como exportar informações de um filme, como nome, ano de lançamento, nota e gênero, para um arquivo JSON.

Primeiro, ao enviar o formulário, o PHP utiliza a variável mágica `$_POST` para capturar os dados enviados. Em seguida, criamos um array associativo `$filme` para organizar essas informações. Para salvar esses dados em um arquivo JSON, utilizamos a função `file_put_contents()` junto com `json_encode()` para converter o array em formato JSON.

Por fim, ao enviar o formulário novamente, o arquivo `filme.json` é criado ou atualizado com os dados do filme, embora não haja saída visível na tela, pois não utilizamos `echo` ou `var_dump` no código PHP. A aula preparou o terreno para futuras lições sobre como exibir dados na tela, combinando PHP e HTML.
<br>