<?php

// Função que verifica o ano de lançamento do filme e exibe uma mensagem correspondente
function exibeMensagemLancamento(int $ano): void {
    if ($ano > 2022) {
        echo "Esse filme é um lançamento\n";
    } elseif ($ano > 2020 && $ano <= 2022) {
        echo "Esse filme é recente\n";
    } else {
        echo "Esse filme é antigo\n";
    }
}

// Função que verifica se o filme está incluído no plano Prime
function incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool {
    return $planoPrime || $anoLancamento < 2020; // Retorna true se o filme estiver incluído no plano Prime ou se for lançado antes de 2020
}

// Função que cria um filme
function criaFilme(string $nome, int $anoLancamento, float $nota, string $genero): Filme {
    $filme = new Filme(); // Instancia um novo objeto da classe Filme

    // Atribui os valores recebidos como parâmetro às propriedades do objeto
    $filme->nome = $nome;
    $filme->anoLancamento = $anoLancamento;
    $filme->nota = $nota;
    $filme->genero = $genero;

    return $filme;
}