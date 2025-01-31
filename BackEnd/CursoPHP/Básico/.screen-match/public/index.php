<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
    
    <title>Screen Match</title>
</head>

<body>
    <nav class="navbar">
        <h1>Exportador do ScreenMatch</h1>
        <a href="./">Voltar</a>
    </nav>

    <section class="container">
        <form action="exporta-arquivo.php" method="post">
            <fieldset>
                <label for="nome">Nome:</label> <br>
                <input type="text" name="nome" id="nome" required>
            </fieldset>

            <fieldset>
                <label for="ano">Ano de lançamento:</label> <br>
                <input type="year" name="ano" id="ano" required>
            </fieldset>

            <fieldset>
                <label for="nome">Nota:</label> <br>
                <input type="number" name="nota" id="nota" required step="0.1">
            </fieldset>

            <fieldset>
                <label for="nome">Gênero:</label> <br>

                <select name="genero" id="genero">
                    <option value="super-heroi">Super-herói</option>
                    <option value="comedia">Comédia</option>
                    <option value="acao">Ação</option>
                    <option value="acao">Terror</option>
                </select>
            </fieldset>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>