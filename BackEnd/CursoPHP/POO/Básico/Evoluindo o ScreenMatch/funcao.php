<?php

function operacaoMatematica(int $numero1, int $numero2, string $operacao): float {
    if ($numero2 == 0 && $operacao == 'divisão') {
        return 'Não é possível dividir por zero';
    }

    return match ($operacao) {
        'soma' => $numero1 + $numero2,
        'subtração' => $numero1 - $numero2,
        'divisão' => $numero1 / $numero2,
        'multiplicação' => $numero1 * $numero2,
    };
}

echo operacaoMatematica(10, 5, 'divisão');