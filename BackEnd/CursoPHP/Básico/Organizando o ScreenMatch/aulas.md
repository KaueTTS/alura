# [ Aula 1 ]
## Resumo da Aula: Definição explícita dos dados

Neste vídeo, aprendemos sobre a organização do código em PHP, focando na criação de uma função construtora para o catálogo de filmes do projeto ScreenMatch. A aula começa com a definição de uma função chamada `criaFilme()`, que estabelece parâmetros obrigatórios para criar um filme, garantindo que todas as informações necessárias sejam fornecidas.

Além disso, discutimos a importância de usar tipos de dados para tornar o código mais previsível e a utilização de parâmetros nomeados, que permitem passar argumentos para a função de forma mais clara e flexível, independentemente da ordem em que foram definidos. Por fim, a aula enfatiza a necessidade de uma estrutura de código mais organizada e robusta, preparando o terreno para futuras evoluções do projeto.
<br>

# [ Aula 2 ]
## Resumo da Aula: Melhorando a estrutura

No vídeo, aprendemos sobre a importância de organizar a estrutura de pastas em um projeto PHP, utilizando o exemplo do ScreenMatch. O instrutor destaca que, embora o código atual não esteja pronto para produção, é fundamental pensar em como ele deve ser estruturado em um cenário real.

A organização proposta inclui:

- **Criação da pasta "src"**: Para armazenar o código-fonte, como funções.
- **Renomeação do arquivo principal**: O arquivo principal é renomeado para "index.php", que será o arquivo executado por padrão em uma aplicação web.
- **Pasta "public"**: Embora os arquivos permaneçam na raiz do projeto neste estágio, a criação de uma pasta "public" é mencionada para armazenar arquivos acessíveis na web.

A separação dos arquivos é importante por motivos de:

1. **Organização**
2. **Convenção**
3. **Segurança**: Garantindo que o servidor web só acesse o que está na pasta pública.

O vídeo conclui ressaltando que a organização do código é um passo essencial para evoluir em direção a um desenvolvimento mais profissional.
<br>

# [ Aula 3 ]
## Resumo da Aula: Erros são nossos amigos

No vídeo, aprendemos sobre a importância de entender e tratar erros no PHP. O instrutor demonstra como o PHP exibe mensagens de erro, começando pelo tipo de erro, seguido pela mensagem e a localização no código. 

Um exemplo prático é apresentado, onde um erro fatal ocorre devido a um parâmetro nomeado incorretamente em uma função. Também é discutido a diferença entre `require` e `include`, mostrando que:

- `require` interrompe a execução se o arquivo não for encontrado.
- `include` apenas gera um aviso e continua a execução.

O vídeo enfatiza que as mensagens de erro e aviso são descritivas e ajudam a identificar rapidamente onde o problema está no código. 
<br>

# O QUE APRENDEMOS?

- Organizamos melhor nossa aplicação, separando em pastas os arquivos que possuem somente definições dos arquivos que efetivamente executam código.
- Vimos como deixar nossa aplicação mais robusta desenvolvendo uma função para criar um filme com todos os dados necessários.
- Aprendemos a ler os erros do PHP e a interpretar as severidades das mensagens como Warnings e Errors.