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
            <h2>Exportar filme</h2>

            <fieldset class="content">
                <div>
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" required>
                </div>
            </fieldset>

            <fieldset class="content">
                <div>
                    <label for="ano">Ano de lançamento</label>
                    <input type="date" name="ano" id="ano" required>
                </div>
            </fieldset>

            <fieldset class="content nota-genero">
                <div>
                    <label for="nome">Nota</label>
                    <input type="number" name="nota" id="nota" required step="0.1">
                </div>

                <div>
                    <label for="nome">Gênero</label>
                    <select name="genero" id="genero">
                        <option value="super-heroi">Super-herói</option>
                        <option value="comedia">Comédia</option>
                        <option value="acao">Ação</option>
                        <option value="acao">Terror</option>
                    </select>
                </div>
            </fieldset>
            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>