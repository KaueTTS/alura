<?php

function celsiusToFahrenheit(float $celsius): float
{
    return ($celsius * 9 / 5) + 32;
}

echo celsiusToFahrenheit(100); // 212