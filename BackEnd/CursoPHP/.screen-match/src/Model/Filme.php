<?php

// Uma classe é um modelo que define as propriedades e métodos de um objeto
class Filme {
    // Propriedades
    private array $notas;

    // Construtor
    public function __construct(
        public readonly string $nome, 
        public readonly int $anoLancamento, 
        public readonly string $genero
    ) {
        $this->notas = [];
    }

    // Métodos
    public function avalia(float $nota): void {
        $this->notas[] = $nota;
    }

    public function media(): float {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }
}