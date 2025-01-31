# [ Aula 1 ]
## Resumo da Aula: Definindo um formato

Nesta aula, aprendemos sobre a manipulação de arquivos e a definição de formatos de dados, focando especialmente no **JSON**. 

### Principais Pontos Abordados:

- **Exemplo de Filme**: Começamos com um exemplo de um filme representado como um array associativo em PHP.

- **Importância dos Formatos**: Discutimos a importância de ter um formato que possa ser facilmente manipulado por código, como o JSON, que é amplamente utilizado na programação web.

- **Função `json_encode`**: Vimos como usar a função `json_encode` para transformar um array associativo em uma string JSON, permitindo que os dados sejam exportados e lidos por outros programas.

- **Função `json_decode`**: Aprendemos a usar a função `json_decode` para converter uma string JSON de volta em um array associativo em PHP, com a opção de trabalhar com objetos ou arrays, dependendo do segundo parâmetro da função.
<br>

# [ Aula 2 ]
## Resumo da Aula: Exportando um filme

Neste vídeo, aprendemos a transformar um array associativo do tipo `filme` em uma string em JSON utilizando a função `json_encode()`. Em seguida, salvamos essa string JSON em um arquivo chamado `filme.json` usando a função `file_put_contents()`, que simplifica o processo de manipulação de arquivos em PHP. 

O caminho do arquivo é definido com `__DIR__`, que representa o diretório atual, e concatenamos com o nome do arquivo. Após executar o código, verificamos que o arquivo foi criado corretamente e contém os dados do filme em formato JSON. 