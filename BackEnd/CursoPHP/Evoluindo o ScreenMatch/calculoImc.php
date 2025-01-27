<?php

function calculaImc(float $alturaEmMetros, float $pesoEmQuilos): float
{
    return $pesoEmQuilos / $alturaEmMetros ** 2;
}