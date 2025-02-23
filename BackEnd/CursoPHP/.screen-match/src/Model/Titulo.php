<?php

namespace ScreenMatch\Model;

abstract class Titulo implements Avaliavel {

    use ComAvaliacao;

    public function __construct(
        public readonly string $nome, 
        public readonly int $anoLancamento, 
        public readonly Genero $genero,
    ) {}

    // Tempo de filme
    abstract public function duracaoEmMinutos(): int;

}