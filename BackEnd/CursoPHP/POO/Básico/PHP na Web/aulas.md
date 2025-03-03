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

# [ Aula 3 ]
## Resumo da Aula: PHP + HTMML

Nesta aula, aprendemos como o PHP pode ser utilizado em conjunto com o HTML para desenvolvimento web. Um ponto importante abordado foi o padrão **POST/Redirect/GET**, que orienta a redirecionar uma requisição `POST` para uma requisição `GET`, evitando a exibição de dados diretamente na tela.

Vimos como usar a função `header()` para redirecionar o usuário para uma página de sucesso, passando parâmetros pela URL. Um exemplo prático foi apresentado, onde os dados de um filme eram salvos em um arquivo JSON e, em seguida, o usuário era redirecionado para uma página que exibia uma mensagem de sucesso com o nome do filme.

Além disso, aprendemos a acessar parâmetros da URL utilizando a variável `$_GET`, e a importância de abrir e fechar as tags PHP corretamente para que o código funcione como esperado. Por fim, foi destacado que os códigos apresentados não são os mais seguros ou performáticos, mas servem como uma introdução ao uso do PHP na web.

# O QUE APRENDEMOS

- Aprendemos como a Web funciona e como o PHP é executado em ambientes Web.
- Utilizamos o servidor web embutido do PHP para termos um projeto executando e acessível pelo navegador.
- Criamos código PHP que lê dados vindos de formulários e parâmetros da URL.