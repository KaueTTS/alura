# [ Aula 1 ]
## Resumo da Aula: Modelando Episódio

Aprendemos sobre como modelar um episódio dentro do sistema de uma plataforma de streaming. A aula começou discutindo as limitações da classe `Serie`, que atualmente contém vários episódios, mas não possui uma estrutura adequada para representar cada episódio individualmente.

Decidimos criar uma nova classe chamada `Episodio`, que não herda de `Titulo`, já que um episódio não é considerado um título isoladamente no contexto do ScreenMatch. A classe `Episodio` foi implementada com um construtor que garante que cada episódio tenha os dados necessários, como a série a que pertence, o nome do episódio e o número do episódio.

Além disso, discutimos a criação de um conversor de notas para estrelas, que transforma uma avaliação de 0 a 10 em um formato de estrelas, comum em plataformas de streaming. A classe `ConversorNotaEstrela` foi introduzida para realizar essa conversão.

Por fim, abordamos a questão de como permitir que tanto títulos (séries e filmes) quanto episódios possam ser avaliados, sem que episódios herdem de `Titulo`, e deixamos essa questão para ser explorada na próxima aula. 
<br>

# [ Aula 2 ]
## Resumo da Aula: 

<br>

# O QUE APRENDEMOS