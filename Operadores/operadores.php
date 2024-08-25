<?php
// Operadores em PHP

// 1. Operadores Aritméticos
$a = 10;
$b = 3;

echo "Operadores Aritméticos:\n";
echo "\$a + \$b = " . ($a + $b) . "\n"; // Soma: 13
echo "\$a - \$b = " . ($a - $b) . "\n"; // Subtração: 7
echo "\$a * \$b = " . ($a * $b) . "\n"; // Multiplicação: 30
echo "\$a / \$b = " . ($a / $b) . "\n"; // Divisão: 3.3333...
echo "\$a % \$b = " . ($a % $b) . "\n"; // Módulo: 1
echo "\$a ** \$b = " . ($a ** $b) . "\n"; // Exponenciação: 1000
echo "\n";

// 2. Operadores de Atribuição
$c = 5;
$c += 3; // Equivalente a $c = $c + 3
echo "Operadores de Atribuição:\n";
echo "\$c += 3 resulta em \$c = " . $c . "\n"; // 8
$c *= 2; // Equivalente a $c = $c * 2
echo "\$c *= 2 resulta em \$c = " . $c . "\n"; // 16
echo "\n";

// 3. Operadores de Comparação
$d = 10;
$e = "10";

echo "Operadores de Comparação:\n";
echo "\$d == \$e : " . ($d == $e ? "true" : "false") . "\n"; // Igualdade: true
echo "\$d === \$e : " . ($d === $e ? "true" : "false") . "\n"; // Identidade: false
echo "\$d != \$e : " . ($d != $e ? "true" : "false") . "\n"; // Diferente: false
echo "\$d !== \$e : " . ($d !== $e ? "true" : "false") . "\n"; // Não idêntico: true
echo "\$d > \$b : " . ($d > $b ? "true" : "false") . "\n"; // Maior que: true
echo "\$d < \$b : " . ($d < $b ? "true" : "false") . "\n"; // Menor que: false
echo "\n";

// 4. Operadores Lógicos
$f = true;
$g = false;

echo "Operadores Lógicos:\n";
echo "\$f && \$g : " . ($f && $g ? "true" : "false") . "\n"; // E lógico: false
echo "\$f || \$g : " . ($f || $g ? "true" : "false") . "\n"; // OU lógico: true
echo "!\$f : " . (!$f ? "true" : "false") . "\n"; // NÃO lógico: false
echo "\n";

// 5. Operadores de Incremento/Decremento
$h = 5;

echo "Operadores de Incremento/Decremento:\n";
echo "Pré-incremento: " . (++$h) . "\n"; // Pré-incremento: 6
echo "Pós-incremento: " . ($h++) . "\n"; // Pós-incremento: 6 (depois incrementa)
echo "Valor após pós-incremento: $h\n"; // 7
echo "Pré-decremento: " . (--$h) . "\n"; // Pré-decremento: 6
echo "Pós-decremento: " . ($h--) . "\n"; // Pós-decremento: 6 (depois decrementa)
echo "Valor após pós-decremento: $h\n"; // 5
echo "\n";

// 6. Operador Ternário
$i = 10;
$j = 5;

echo "Operador Ternário:\n";
$maior = $i > $j ? $i : $j;
echo "\$i > \$j ? \$i : \$j = " . $maior . "\n"; // 10
echo "\n";

// 7. Operador de Coalescência Nula
$k = null;
$l = 20;

echo "Operador de Coalescência Nula:\n";
$resultado = $k ?? $l; // Se $k for null, usa $l
echo "\$k ?? \$l = " . $resultado . "\n"; // 20
?>
