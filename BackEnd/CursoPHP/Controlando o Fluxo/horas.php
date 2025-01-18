<?php

/*
Y: ano com quatro dígitos (ex: 2023)
y: ano com dois dígitos (ex: 23)
m: mês com dois dígitos (ex: 01 a 12)
n: mês sem zero à esquerda (ex: 1 a 12)
d: dia do mês com dois dígitos (ex: 01 a 31)
j: dia do mês sem zero à esquerda (ex: 1 a 31)
H: hora em formato 24 horas (ex: 00 a 23)
h: hora em formato 12 horas (ex: 01 a 12)
i: minutos com dois dígitos (ex: 00 a 59)
s: segundos com dois dígitos (ex: 00 a 59)
A: AM ou PM
l: nome do dia (segunda, terça, etc)
w: número do dia (1 = Domingo, 2 = Segunda, etc)
*/

date_default_timezone_set('America/Sao_Paulo');

$dia = date("H");

if ($dia >= 6 && $dia < 12) {
    echo "Bom dia!";
} elseif ($dia >= 12 && $dia < 18) {
    echo "Boa tarde!";
} else {
    echo "Boa noite!";
}