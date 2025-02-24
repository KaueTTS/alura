<?php

namespace ScreenMatch\Model;

class Episodio implements Avaliavel {

    use ComAvaliacao;

    public function __construct(
        public readonly Serie $serie,
        public readonly string $nome,
        public readonly int $numero
    ) {}

}