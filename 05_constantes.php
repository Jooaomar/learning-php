<?php
// Constantes
define("NOME", "João");
define("IDADE", 25);

define("TIMES", ['vasco', 'flameno', 'palmeiras']);

echo 'Meu nome é '.NOME.' e minha idade é '.IDADE.'.';

echo "<hr>";

echo TIMES[0];

echo "<hr>";

// CONSTANTES SÃO GLOBAIS

function exibeNome() {
	echo NOME;
}

exibeNome();

echo "<hr";