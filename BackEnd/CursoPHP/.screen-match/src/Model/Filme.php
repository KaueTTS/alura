<?php

// Uma classe é um modelo que define as propriedades e métodos de um objeto
class Filme {
    public string $nome;
    public int $anoLancamento;
    public float $media;
    public string $genero;
    private array $notas = [];

    public function avalia(float $nota): void {
        $this->notas[] = $nota;
    }

    public function media(): float {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }
}