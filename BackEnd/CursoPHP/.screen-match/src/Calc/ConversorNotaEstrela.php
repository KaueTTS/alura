<?php

namespace ScreenMatch\Calc;

use ScreenMatch\Model\Avaliavel;
use Throwable;

class ConversorNotaEstrela {
    
    public function converte(Avaliavel $avaliavel): float {
        try {
            $nota = $avaliavel->media();
            return round($nota) / 2;
        } catch (Throwable $err) {
            echo $err->getMessage() . ": Não é possível dividir por zero\n";
            return 0;
        } finally {
            echo "Finalizou!";
        }
    }
    
}