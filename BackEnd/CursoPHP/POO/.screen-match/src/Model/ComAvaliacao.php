<?php

namespace ScreenMatch\Model;

use ScreenMatch\Exception\NotaInvalidaException;

trait ComAvaliacao {
    
    private array $notas = [];

    /**
     * @throws NotaInvalidaException Se a nota for < 0 ou > 10
    */
    public function avalia(float $nota): void {
        if ($nota < 0 || $nota > 10) {
            throw new NotaInvalidaException();
        }

        $this->notas[] = $nota;
    }

    public function media(): float {
        return array_sum($this->notas) / count($this->notas);
    }

}