<?php

// Funções anônimas e Arrow Functions em PHP

echo "Funções Anônimas:\n";

// 1. Função Anônima
$soma = function ($a, $b) {
    return $a + $b;
};

$resultado = $soma(10, 20);
echo "Soma de 10 e 20: $resultado\n"; // Soma de 10 e 20: 30


// 2. Função Anônima com uso de variável externa (closure)
$mult = 2;
$multiplicacao = function ($a) use ($mult) {
    return $a * $mult;
};

echo "Multiplicação de 10 por $mult: " . $multiplicacao(10) . "\n"; // Multiplicação de 10 por 2: 20


echo "\nArrow Functions:\n";

// 3. Arrow Function
$somaArrow = fn($a, $b) => $a + $b;

$resultadoArrow = $somaArrow(5, 15);
echo "Soma de 5 e 15: $resultadoArrow\n"; // Soma de 5 e 15: 20

// 4. Arrow Function com uso de variável externa
$add = 3;
$incremento = fn($a) => $a + $add;

echo "Incremento de 10 com $add: " . $incremento(10) . "\n"; // Incremento de 10 com 3: 13
