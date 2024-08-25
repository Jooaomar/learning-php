<?php
// Estruturas de Controle Condicionais e Loops em PHP

// 1. Estruturas Condicionais
echo "Estruturas Condicionais:\n";

// if, else, elseif
$numero = 10;

if ($numero > 0) {
    echo "\$numero é positivo\n"; // $numero é positivo
} elseif ($numero < 0) {
    echo "\$numero é negativo\n";
} else {
    echo "\$numero é zero\n";
}

// switch
$diaSemana = 3;

switch ($diaSemana) {
    case 1:
        echo "Domingo\n";
        break;
    case 2:
        echo "Segunda-feira\n";
        break;
    case 3:
        echo "Terça-feira\n";
        break;
    case 4:
        echo "Quarta-feira\n";
        break;
    case 5:
        echo "Quinta-feira\n";
        break;
    case 6:
        echo "Sexta-feira\n";
        break;
    case 7:
        echo "Sábado\n";
        break;
    default:
        echo "Dia inválido\n";
}

echo "\n";

// 2. Loops
echo "Loops:\n";

// for
echo "Loop for:\n";
for ($i = 1; $i <= 5; $i++) {
    echo "Contagem: $i\n";
}

// while
echo "\nLoop while:\n";
$j = 1;
while ($j <= 5) {
    echo "Contagem: $j\n";
    $j++;
}

// do-while
echo "\nLoop do-while:\n";
$k = 1;
do {
    echo "Contagem: $k\n";
    $k++;
} while ($k <= 5);

// foreach
echo "\nLoop foreach:\n";
$nomes = ["João", "Maria", "José"];
foreach ($nomes as $nome) {
    echo "Nome: $nome\n";
}

// foreach com chave e valor
echo "\nLoop foreach com chave e valor:\n";
$idades = ["João" => 25, "Maria" => 30, "José" => 22];
foreach ($idades as $nome => $idade) {
    echo "$nome tem $idade anos\n";
}

?>
