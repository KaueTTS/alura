<?php

// Define o fuso horário para o Brasil
date_default_timezone_set('America/Sao_Paulo');

// Obtém o número do dia da semana (1 = domingo, 2 = segunda ... 7 = sábado)
$dia = date("w"); // 'w' retorna o número do dia da semana

$diaCompleto = date("Y-m-d H:i:s");
echo "$diaCompleto \n";
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

// Switch com os nomes dos dias da semana em português
switch ($dia) {
    case 1:
        $nomeDia = "Domingo";
        break;
    case 2:
        $nomeDia = "Segunda-feira";
        break;
    case 3:
        $nomeDia = "Terça-feira";
        break;
    case 4:
        $nomeDia = "Quarta-feira";
        break;
    case 5:
        $nomeDia = "Quinta-feira";
        break;
    case 6:
        $nomeDia = "Sexta-feira";
        break;
    case 7:
        $nomeDia = "Sábado";
        break;
    default:
        $nomeDia = "Dia inválido";
        break;
}

echo "O dia $dia é $nomeDia";