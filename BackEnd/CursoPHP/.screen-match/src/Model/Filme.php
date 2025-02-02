<?php

// Uma classe é um modelo que define as propriedades e métodos de um objeto
class Filme {
    // Propriedades
    private array $notas;

    // Construtor
    public function __construct(
        private string $nome, 
        private int $anoLancamento, 
        private string $genero
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

    // Métodos de acesso
    // public function defineNome(string $nome): void {
    //     $this->nome = $nome;
    // }  
    // public function defineAnoLancamento(int $anoLancamento): void {
    //     $this->anoLancamento = $anoLancamento;
    // } 
    // public function defineGenero(string $genero): void {
    //     $this->genero = $genero;
    // }

    public function nome(): string {
        return $this->nome;
    }

    public function anoLancamento(): int {
        return $this->anoLancamento;
    }
    
    public function genero(): string {
        return $this->genero;
    }
}