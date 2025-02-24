<?php

namespace ScreenMatch\Calc;

use DivisionByZeroError;
use ScreenMatch\Model\Avaliavel;

class ConversorNotaEstrela {
    
    public function converte(Avaliavel $avaliavel): float {
        try {
            $nota = $avaliavel->media();
            return round($nota) / 2;
        } catch (DivisionByZeroError $err) {
            echo $err->getMessage() . ": Não é possível dividir por zero\n";
            return 0;
        }
    }
    
}