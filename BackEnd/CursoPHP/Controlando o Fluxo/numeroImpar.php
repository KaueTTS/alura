<?php

$numero = 0;

/* 
Verifica se o NUMERO DIVIDENDO (0) após dividir pelo NUMERO DIVISOR (2) ele vai sobrar algum valor na parte decimal (diferente de 0) do quociente. Exemplo: 3 / 2 = 1.5 (sobra 0.5, ou seja, após a vírgula tem um valor != 0)
*/
// if ($numero % 2 != 0) { // Se a parte decimal for diferente de 0, o número é ímpar
//     echo "O $numero é ímpar";
// } else { // Se a parte decimal for igual a 0, o número é par
//     echo "O $numero é par";
// }

for ($numero; $numero <= 100 ; $numero++) { 
    if ($numero % 2 != 0) {
        echo "O $numero é ímpar\n";
    }
}