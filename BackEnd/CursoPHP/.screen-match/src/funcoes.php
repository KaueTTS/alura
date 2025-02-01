<?php

function exibeMensagemLancamento(int $ano): void {
    if ($ano > 2022) {
        echo "Esse filme é um lançamento\n";
    } elseif ($ano > 2020 && $ano <= 2022) {
        echo "Esse filme é recente\n";
    } else {
        echo "Esse filme é antigo\n";
    }
}

function incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool {
    return $planoPrime || $anoLancamento < 2020;
}

function criaFilme(string $nome, int $anoLancamento, float $nota, string $genero): array {
    return [
        "nome" => $nome,
        "ano" => $anoLancamento,
        "nota" => $nota,
        "genero" => $genero
    ];
}