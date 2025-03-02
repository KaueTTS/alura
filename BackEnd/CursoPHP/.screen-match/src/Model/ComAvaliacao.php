<?php

namespace ScreenMatch\Model;

trait ComAvaliacao {
    
    private array $notas = [];

    /**
     * @throws \InvalidArgumentException Se a nota for < 0 ou > 10
    */
    public function avalia(float $nota): void {
        if ($nota < 0 || $nota > 10) {
            throw new \InvalidArgumentException("A nota precisa estar entre 0 e 10");
        }

        $this->notas[] = $nota;
    }

    public function media(): float {
        return array_sum($this->notas) / count($this->notas);
    }

}