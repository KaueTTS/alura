<?php

class ConversorNotaEstrela {
    
    public function converte(Titulo $titulo): float {
        $nota = $titulo->media();

        return $nota;
    }
}