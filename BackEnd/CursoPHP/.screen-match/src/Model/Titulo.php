<?php

abstract class Titulo implements Avaliavel {

    protected array $notas;

    public function __construct(
        public readonly string $nome, 
        public readonly int $anoLancamento, 
        public readonly Genero $genero,
    ) {
        $this->notas = [];
    }

    // Cálculo das notas
    public function avalia(float $nota): void {
        $this->notas[] = $nota;
    }

    public function media(): float {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }

    // Tempo de filme
    abstract public function duracaoEmMinutos(): int;
}