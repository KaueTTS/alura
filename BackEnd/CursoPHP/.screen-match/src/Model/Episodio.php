<?php

class Episodio {

    public function __construct(
        public readonly Serie $serie,
        public readonly string $nome,
        public readonly int $numero
    ) {
        
    }
}