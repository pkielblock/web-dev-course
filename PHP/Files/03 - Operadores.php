<?php

$n1 = 10;
$n2 = 5;

$sum = $n1 + $n2;
$div = $n1 / $n2;
$mult = $n1 * $n2;
$rest = $n1 % $n2;

echo "Soma: " . $sum . PHP_EOL;
echo "Divisão: " . $div . PHP_EOL;
echo "Multiplicação: " . $mult . PHP_EOL;
echo "Resto: " . $rest . PHP_EOL;

//Modulo só trabalha com int
// Errado, .3 foi removido
echo 7 % 3.3 . PHP_EOL;

//Modulo com double.
echo fmod(7, 3.3) . PHP_EOL;


